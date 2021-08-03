<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\Status\ChangeStatus;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Slider\SliderInputRequest;
use App\Http\Requests\Slider\SliderUpdateRequest;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        $datas = $this->datas();
        $model = 'slider';
        $columns = Slider::columns();

        if (request('per-page') or request('page')) {
            return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
        }
        return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
    public function create()
    {
        $data = '';
        $columns = Slider::create_columns();
        $model = 'slider';
        return view('layouts.data.create', compact('data', 'columns', 'model'));
    }
    public function store(SliderInputRequest $request, ImageHandling $imageHandling, StoreUpdateData $input)
    {
        $product = new Slider();

        $input->sliderStoreUpdate($product, $request);
        $product->slug = time() . '-' . Str::slug($request['heading']);
        $imageHandling->uploadImage($product, $request, 'slider');

        $product->save();
        return redirect('admin/slider')
            ->withSuccess('Slider Created Successfully');
    }
    public function edit($slug)
    {
        $data = Slider::where('slug', $slug)->firstOrFail();
        $columns = Slider::edit_columns();
        $model = 'slider';
        return view('layouts.data.edit', compact('data', 'columns', 'model'));
    }
    public function update(SliderUpdateRequest $request, ImageHandling $imageHandling, StoreUpdateData $input, $slug)
    {
        $product = Slider::where('slug', $slug)
            ->firstOrFail();

        $input->sliderStoreUpdate($product, $request);
        $imageHandling->uploadImage($product, $request, 'slider', 400, 300);
        $product->update();

        return back()->withSuccess('Slider Updated Successfully');;
    }
    public function status(ChangeStatus $status, $slug)
    {
        $status->sliderStatusChange($slug);
        $datas = $this->datas();
        $columns = Slider::columns();
        $model = 'slider';
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    protected function datas()
    {
        $datas = Slider::orderBy('id', 'asc')
            ->pagination(request('per-page'));
        return $datas;
    }
}
