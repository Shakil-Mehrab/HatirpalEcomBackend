<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Product\ProductInputRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }
  public function index()
  {
    $datas = $this->datas();
    $model = 'product';
    $columns = Product::columns();
    // return response()->json(array("data" => $datas), 200);
    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }

  public function create()
  {
    $data = '';
    $columns = Product::create_columns();
    $model = 'product';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(ProductInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
  {
    $product = new Product();

    $input->productStoreUpdate($product, $request);
    $product->slug = time() . '-' . Str::slug($request['name']);
    $imageHandling->uploadImage($product, $request, 'product');

    $request->user()->products()->save($product);

    $imageHandling->uploadRelatedImage($product, $request);
    $input->productPivotData($product, $request);
    // $variation = $input->productVariation($product);
    $input->productStoreStock($product, $request);

    return redirect('admin/product')
      ->withSuccess('Product Created Successfully');
  }
  public function edit($slug)
  {
    $data = Product::where('slug', $slug)->firstOrFail();
    $columns = Product::edit_columns();
    $model = 'product';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(ProductUpdateRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
  {
    // dd($request['category_id']);

    $product = Product::where('slug', $slug)
      ->firstOrFail();

    $input->productStoreUpdate($product, $request);
    $imageHandling->uploadImage($product, $request, 'product');
    $imageHandling->uploadRelatedImage($product, $request);

    $input->productPivotData($product, $request);
    $input->productUpdateStock($product, $request);

    $product->update();

    return back()->withSuccess('Product Updated Successfully');;
  }

  protected function datas()
  {
    $datas = Product::orderBy('id', 'desc')
      ->with('categories', 'sizes', 'productImages', 'user')
      ->pagination(request('per-page'));
    return $datas;
  }
}
