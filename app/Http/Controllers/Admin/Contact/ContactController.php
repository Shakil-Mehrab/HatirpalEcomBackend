<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Contact\ContactInputRequest;
use App\Http\Requests\Contact\ContactUpdateRequest;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'contact';
        $columns = Contact::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }

    public function create()
    {
        $data = '';
        $columns = Contact::create_columns();
        $model = 'contact';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(ContactInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
        $product = new Contact();

        $input->contactStoreUpdate($product, $request);

        $request->user()->contacts()->save($product);
        return redirect('admin/contact')
            ->withSuccess('Contact Created Successfully');
    }
    public function edit($slug)
    {
        $data = Contact::where('slug', $slug)->firstOrFail();
        $columns = Contact::edit_columns();
        $model = 'contact';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(ContactInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
        $product = Contact::where('slug', $slug)
            ->firstOrFail();

        $input->contactStoreUpdate($product, $request);
        $product->update();

        return back()->withSuccess('Contact Updated Successfully');;
    }
    protected function datas()
    {
        $datas = Contact::orderBy('id', 'desc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
