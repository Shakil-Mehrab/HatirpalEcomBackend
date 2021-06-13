<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Slider\SliderInputRequest;
use App\Http\Requests\Slider\SliderUpdateRequest;

class SliderController extends Controller
{
    public function view()
    {
      $datas = Slider::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $model = 'slider';
      $columns = Slider::columns();
  
      if (request('per-page') or request('page')) {
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
      }
      return view('layouts.data.view', compact('datas', 'columns', 'model'));
    }
  
    public function search()
    {
      $datas = Slider::where('heading', 'LIKE', "%" . request('query') . "%")
      ->orWhere('slug', 'LIKE', "%" . request('query') . "%")
        ->searchPagination(request('per-page'));
      $columns = Slider::columns();
      $model = 'slider';
      return view('layouts.data.table', compact('datas', 'columns', 'model'));
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
      $imageHandling->uploadImage($product, $request,'slider');
  
      $product->save();
      return redirect('admin/view/slider')
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
        $imageHandling->uploadImage($product, $request,'slider');
      $product->update();
  
      return back()->withSuccess('Slider Updated Successfully');;
    }
    public function delete(DeleteData $delete, $slug)
    {
      $delete->sliderDelete($slug);
      $datas = Slider::orderBy('id', 'desc')
        ->pagination(request('per-page'));
      $columns = Slider::columns();
      $model = 'slider';
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
  }
  
