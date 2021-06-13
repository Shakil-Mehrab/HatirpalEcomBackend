<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Product\ProductInputRequest;
use App\Http\Requests\Product\ProductUpdateRequest;

class ProductController extends Controller
{
  public function view()
  {
    $datas = Product::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $model = 'product';
    $columns = Product::columns();

    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }

  public function search()
  {
    $datas = Product::where('name', 'LIKE', "%" . request('query') . "%")
    ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Product::columns();
    $model = 'product';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
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
    // dd($request->stock);
    $product = new Product();

    $input->productStoreUpdate($product, $request);
    $product->slug = time() . '-' . Str::slug($request['name']);
    $imageHandling->uploadImage($product, $request,'product');

    $request->user()->products()->save($product);

    $imageHandling->uploadRelatedImage($product, $request);
    $input->productPivotData($product, $request);
    $variation=$input->productVariation($product);
    $input->productStoreStock($variation,$request);


    



    return redirect('admin/view/product')
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
    // dd($request->size_id);
    $product = Product::where('slug', $slug)
      ->firstOrFail();

    $input->productStoreUpdate($product, $request);
    $imageHandling->uploadImage($product, $request,'product');
    $imageHandling->uploadRelatedImage($product, $request);
    $input->productPivotData($product, $request);
    $input->productUpdateStock($product,$request);

    $product->update();

    return back()->withSuccess('Product Updated Successfully');;
  }
  public function delete(DeleteData $delete, $slug)
  {
    $delete->productDelete($slug);
    $datas = Product::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Product::columns();
    $model = 'product';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}
