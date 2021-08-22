<?php

namespace App\Http\Controllers\Admin\Supplier;

use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Mail\Supplier\MailForCreatedSupplier;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Supplier\SupplierInputRequest;
use App\Http\Requests\Supplier\SupplierUpdateRequest;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->only('index', 'show', 'destroy', 'status');
        $this->middleware('exist_supplier')->only('create');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'supplier';
        $columns = Supplier::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
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
        $imageHandling->uploadImage($product, $request, 'supplier');
        $imageHandling->uploadSupplerDocument($product, $request, 'supplier');
        $request->user()->supplier()->save($product);
        Mail::to('mehrabhoussainshakil4@gmail.com')->send(new  MailForCreatedSupplier($product));
        return redirect('admin/supplier')
            ->withSuccess('Supplier Created Successfully');
    }
    public function show($slug)
    {
        $data = Supplier::where('slug', $slug)
            ->firstOrFail();
        $products = $data->products;
        $columns = Supplier::columns();
        $model = 'supplier';
        return view('supplier', compact('data', 'columns', 'model', 'products'));
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
        $imageHandling->uploadImage($product, $request, 'supplier');
        $imageHandling->uploadSupplerDocument($product, $request, 'supplier');

        $product->update();

        return back()->withSuccess('Supplier Updated Successfully');;
    }
    protected function datas()
    {
        $datas = Supplier::orderBy('id', 'asc')
            ->with('user')
            ->pagination(request('per-page'));
        return $datas;
    }
}
