<?php

namespace App\Http\Controllers\Admin\ShippingMethod;

use App\Models\ShippingMethod;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Bag\ShippingMethod\ShippingMethodInput;
use App\Http\Requests\ShippingMethod\ShippingMethodInputRequest;

class ShippingMethodController extends Controller
{
    public function view()
    {
      $datas = ShippingMethod::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'shippingmethod';
      $columns = ShippingMethod::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
      $data = '';
      $columns = ShippingMethod::create_columns();
      $model = 'shippingmethod';
      return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(ShippingMethodInputRequest $request, StoreUpdateData $input)
    {
        
      $product = new ShippingMethod();
      $input->shippingMethodstoreUpdate($product, $request);
      $product->save();
  
      return redirect('admin/view/shippingmethod')
        ->withSuccess('Shipping Method Created Successfully');
    }
    public function edit($slug)
    {
      $data = ShippingMethod::where('slug', $slug)
        ->firstOrFail();
      $columns = ShippingMethod::edit_columns();
      $model = 'shippingmethod';
      return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(ShippingMethodInputRequest $request, StoreUpdateData $input, $slug)
    {
      $product = ShippingMethod::where('slug', $slug)
        ->firstOrFail();
        $input->shippingMethodstoreUpdate($product, $request);
      $product->update();
      return back()->withSuccess('Shipping Method Updated Successfully');;
    }
    public function delete(DeleteData $delete,$slug)
    {
      $delete->shippingMethodDelete($slug);
      
      $datas = ShippingMethod::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = ShippingMethod::columns();
      $model = 'shippingmethod';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
  }
  
