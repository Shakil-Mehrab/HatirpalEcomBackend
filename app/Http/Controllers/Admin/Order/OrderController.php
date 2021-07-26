<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Mail\MailForOrderConfirmed;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use Mail;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Order\OrderInputRequest;

class OrderController extends Controller
{
  public function index()
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
  public function search()
  {
    $datas = Order::Where('slug', 'LIKE', "%" . request('query') . "%")
      ->orWhere('order_id', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Order::columns();
    $model = 'order';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
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

    return redirect('admin/order')
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
    $order = Order::where('slug', $slug)
      ->firstOrFail();
    $input->orderStoreUpdate($order, $request);
    $order->update();
    if ($request->status == 'confirmed') {
      // dd($order->user->email);
      Mail::to($order->user->email)->send(new MailForOrderConfirmed($order));
    }
    return back()->withSuccess('Order Updated Successfully');;
  }
  public function destroy(DeleteData $delete, $slug)
  {
    $delete->orderDelete($slug);

    $datas = Order::orderBy('id', 'desc')
      ->pagination(request('per-page'));

    $columns = Order::columns();
    $model = 'order';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
  public function status(ChangeStatus $status, $slug)
  {
    $status->orderStatusChange($slug);
    $datas = Order::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Order::columns();
    $model = 'order';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}
