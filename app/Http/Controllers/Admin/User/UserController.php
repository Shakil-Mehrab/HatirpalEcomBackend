<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Http\Requests\User\UserUpdateRequest;

class UserController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }
  public function index()
  {
    $datas = $this->datas();
    $columns = User::columns();
    $model = 'user';
    if (request('per-page') or request('page')) {
      return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
    return view('layouts.data.view', compact('datas', 'columns', 'model'));
  }
  public function search()
  {
    $query = request('query');
    $datas = User::where('name', 'LIKE', "%" . $query . "%")
      ->searchPagination(request('per-page'));
    $columns = User::columns();
    $model = 'user';
    return view('layouts.data.table', compact('datas', 'columns', 'model'));
  }
  public function edit($slug)
  {
    $data = User::where('slug', $slug)->firstOrFail();
    $columns = User::edit_columns();
    $model = 'user';
    return view('layouts.data.edit', compact('data', 'model', 'columns'));
  }
  public function update(UserUpdateRequest $request, ImageHandling $imageHandling, $slug)
  {
    $product = User::where('slug', $slug)
      ->firstOrFail();
    $product->update($request->only(['name', 'email']));
    $imageHandling->uploadImage($product, $request, 'user');
    $product->update();
    return back()->withSuccess('User Updated Successfully');;
  }

  protected function datas()
  {
    $datas = User::orderBy('id', 'asc')
      ->pagination(request('per-page'));
    return $datas;
  }
}
