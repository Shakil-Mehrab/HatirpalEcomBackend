<?php

namespace App\Http\Controllers\Admin\Supplier;

use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Supplier\SupplierInputRequest;
use App\Http\Requests\Supplier\SupplierUpdateRequest;

class SupplierController extends Controller
{
  public function index()
  {
    $datas = Supplier::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $model = 'supplier';
    $columns = Supplier::columns();

    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }

  public function search()
  {
    $datas = Supplier::where('heading', 'LIKE', "%" . request('query') . "%")
      ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Supplier::columns();
    $model = 'slider';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
  }
  public function create()
  {
    $data = '';
    $columns = Supplier::create_columns();
    $model = 'supplier';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(SupplierInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
  {
    $product = new Supplier();

    $input->supplierStoreUpdate($product, $request);
    $product->slug = time() . '-' . Str::slug($request['company_name']);
    $imageHandling->uploadsupplierImage($product, $request, 'supplier');

    $request->user()->supplier()->save($product);
    return redirect('admin/supplier')
      ->withSuccess('Supplier Created Successfully');
  }
  public function edit($slug)
  {
    $data = Supplier::where('slug', $slug)->firstOrFail();
    $columns = Supplier::edit_columns();
    $model = 'supplier';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(SupplierUpdateRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
  {
    $product = Supplier::where('slug', $slug)
      ->firstOrFail();

    $input->supplierStoreUpdate($product, $request);
    $imageHandling->uploadsupplierImage($product, $request, 'supplier');
    $product->update();

    return back()->withSuccess('Supplier Updated Successfully');;
  }
  public function delete(DeleteData $delete, $slug)
  {
    $delete->supplierDelete($slug);
    $datas = Supplier::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Supplier::columns();
    $model = 'supplier';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
  public function status(ChangeStatus $status, $slug)
  {
    $status->supplierStatusChange($slug);
    $datas = Supplier::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Supplier::columns();
    $model = 'supplier';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}
