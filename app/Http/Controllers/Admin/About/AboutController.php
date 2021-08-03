<?php

namespace App\Http\Controllers\Admin\About;

use App\Models\About;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\About\AboutInputRequest;
use App\Http\Requests\About\AboutUpdateRequest;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'about';
        $columns = About::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }

    public function create()
    {
        $data = '';
        $columns = About::create_columns();
        $model = 'about';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(AboutInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
        $product = new About();

        $input->aboutStoreUpdate($product, $request);
        $product->slug = time() . '-' . Str::slug($request['heading']);
        $imageHandling->uploadImage($product, $request, 'about');

        $product->save();
        return redirect('admin/about')
            ->withSuccess('About Created Successfully');
    }
    public function edit($slug)
    {
        $data = About::where('slug', $slug)->firstOrFail();
        $columns = About::edit_columns();
        $model = 'about';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(AboutUpdateRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
        $product = About::where('slug', $slug)
            ->firstOrFail();

        $input->aboutStoreUpdate($product, $request);
        $imageHandling->uploadImage($product, $request, 'about');
        $product->update();

        return back()->withSuccess('About Updated Successfully');;
    }
    public function status(ChangeStatus $status, $slug)
    {
        $status->aboutStatusChange($slug);
        $datas = $this->datas();
        $columns = About::columns();
        $model = 'about';
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    protected function datas()
    {
        $datas = About::orderBy('id', 'desc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
