<?php

namespace App\Http\Controllers\Admin\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Order\MailForOrderConfirmed;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Order\OrderInputRequest;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
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
            Mail::to($order->user->email)->send(new MailForOrderConfirmed($order));
        }
        return back()->withSuccess('Order Updated Successfully');;
    }
    public function show($slug)
    {
        $data = Order::where('slug', $slug)
            ->firstOrFail();
        $columns = Order::columns();
        $model = 'order';
        return view('layouts.order.detail', compact('data', 'columns', 'model'));
    }
    protected function datas()
    {
        $datas = Order::orderBy('id', 'desc')
            ->with('user', 'address')
            ->pagination(request('per-page'));
        return $datas;
    }
}
