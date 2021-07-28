<?php

namespace App\Http\Controllers\Admin\UserProfile;

use App\Models\User;
use App\Models\Supplier;
use App\Bag\Admin\Delete\DeleteData;
use App\Http\Controllers\Controller;
use App\Bag\Admin\Image\ImageHandling;
use App\Http\Requests\User\UserUpdateRequest;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('layouts.userprofile.view');
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
        $product->name = $request['name'];
        $product->email = $request['email'];
        $imageHandling->uploadImage($product, $request, 'user');
        $product->update();
        return back()->withSuccess('User Updated Successfully');;
    }
    public function destroy(DeleteData $delete, $slug)
    {
        $delete->userDelete($slug);

        $datas = User::orderBy('id', 'desc')
            ->pagination(request('per-page'));
        $columns = User::columns();
        $model = 'user';
        return view('layouts.data.table', compact('datas', 'columns', 'model'))->render();
    }
}
