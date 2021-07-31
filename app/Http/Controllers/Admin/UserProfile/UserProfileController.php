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
    public function edit()
    {
        $data = auth()->user();
        $columns = User::edit_columns();
        $model = 'user';
        return view('layouts.userprofile.edit', compact('data', 'model', 'columns'));
    }
    public function update(UserUpdateRequest $request, ImageHandling $imageHandling, $slug)
    {
        $product = User::where('slug', $slug)
            ->firstOrFail();
        $product->update($request->only(['name', 'email']));
        $imageHandling->uploadImage($product, $request, 'user');
        $product->update();
        return back()->withSuccess('User Profile Updated Successfully');;
    }
}
