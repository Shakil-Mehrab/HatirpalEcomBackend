<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\StoreUpdate\StoreUpdateData;
use App\Http\Requests\Category\CategoryInputRequest;
use App\Http\Requests\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
  public function view()
  {
    $datas = Category::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Category::columns();
    $model = 'category';
    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }
  public function search()
  {
    $datas = Category::where('name', 'LIKE', "%" . request('query') . "%")
      ->searchPagination(request('per-page'));
    $columns = Category::columns();
    $model = 'category';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
  }
  public function create()
  {
    $data = '';
    $columns = Category::create_columns();
    $model = 'category';
    return view('layouts.data.create', compact('data', 'columns', 'model'));
  }
  public function store(CategoryInputRequest $request, StoreUpdateData $input)
  {
    $product = new Category();
    $input->categoryStoreUpdate($product, $request);
    $product->slug =  time() . '-' . Str::slug($request['name']);
    $request->user()->categories()->save($product);
    return redirect('admin/view/category')->withSuccess('Category Created Successfully');
  }
  public function edit($slug)
  {
    $data = Category::where('slug', $slug)->firstOrFail();
    $columns = Category::edit_columns();
    $model = 'category';
    return view('layouts.data.edit', compact('data', 'columns', 'model'));
  }
  public function update(CategoryUpdateRequest $request, StoreUpdateData $input, $slug)
  {
    $product = Category::where('slug', $slug)
      ->firstOrFail();
    $input->categoryStoreUpdate($product, $request);
    $product->update();
    return back()->withSuccess('Category Updated Successfully');;
  }
  public function delete(DeleteData $delete, $slug)
  {
    $delete->catDelete($slug);
    $datas = Category::orderBy('id', 'desc')
      ->pagination(request('per-page'));
    $columns = Category::columns();
    $model = 'category';
    return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
  }
}
