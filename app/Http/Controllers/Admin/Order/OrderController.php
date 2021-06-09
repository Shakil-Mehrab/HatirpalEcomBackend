<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Order\OrderInputRequest;

class OrderController extends Controller
{
    public function view()
    {
      $datas = Order::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'order';
      $columns = Order::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
    public function create()
  {
    $data = '';
    $columns = Order::create_columns();
    $model = 'order';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(OrderInputRequest $request, StoreUpdateData $input)
  {
    $product = new Order();

    $input->orderStoreUpdate($product, $request);

    $request->user()->orders()->save($product);

    return redirect('admin/view/order')
      ->withSuccess('Order Created Successfully');
  }
  public function edit($slug)
  {
    $data = Order::where('slug', $slug)
      ->firstOrFail();
    $columns = Order::edit_columns();
    $model = 'order';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(OrderInputRequest $request, StoreUpdateData $input, $slug)
  {
    $product = Order::where('slug', $slug)
      ->firstOrFail();
    $input->orderStoreUpdate($product, $request);
    $product->update();
    return back()->withSuccess('Order Updated Successfully');;
  }
  public function delete(DeleteData $delete,$slug)
  {
    $delete->orderDelete($slug);
    
    $datas = Order::orderBy('id', 'desc')
      ->pagination(request('per-page'));

    $columns = Order::columns();
    $model = 'order';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}
