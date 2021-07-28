<?php

namespace App\Bag\Admin\Image;

use Illuminate\Support\Str;
use App\Models\ProductImage;
use Intervention\Image\Facades\Image;

class ImageHandling
{
  public function uploadImage($product, $request, $model, $width = 400, $height = "400")
  {
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail, 22, 100))) {
        unlink(substr($product->thumbnail, 22, 100));
        // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
      }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
      $upload_path = "images/" . $model . "/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->resize($width,  $height)->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
  }
  public function uploadRelatedImage($product, $request)
  {
    $images = $request->file("images");
    if ($images) {
      foreach ($images as $image) {
        $image_ext = $image->getClientOriginalExtension();
        $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
        $upload_path = "images/product/related/" . $image_full_name;
        Image::make($image)->resize(200, 200)->save($upload_path);
        $produtImage = new ProductImage();
        $produtImage->product_id = $product->id;
        $produtImage->thumbnail = asset($upload_path);
        $produtImage->save();
      }
    }
  }
  public function uploadSupplerDocument($product, $request, $model, $width = 400, $height = "400")
  {
    if ($request->file("thumbnail1")) {
      $image = $request->file("thumbnail1");
      if ($image) {
        if (file_exists(substr($product->thumbnail1, 22, 100))) {
          unlink(substr($product->thumbnail1, 22, 100));
        }
        $image_ext = $image->getClientOriginalExtension();
        $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
        $upload_path = "images/" . $model . "/thumbnail/" . $image_full_name;
        Image::make($request->file('thumbnail1'))->resize($width,  $height)->save($upload_path);
        $product->thumbnail1 = asset($upload_path);
      }
    }
    if ($request->file("thumbnail2")) {
      $image = $request->file("thumbnail2");
      if ($image) {
        if (file_exists(substr($product->thumbnail2, 22, 100))) {
          unlink(substr($product->thumbnail2, 22, 100));
        }
        $image_ext = $image->getClientOriginalExtension();
        $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
        $upload_path = "images/" . $model . "/thumbnail/" . $image_full_name;
        Image::make($request->file('thumbnail2'))->resize($width,  $height)->save($upload_path);
        $product->thumbnail2 = asset($upload_path);
      }
    }
    if ($request->file("thumbnail3")) {
      $image = $request->file("thumbnail3");
      if ($image) {
        if (file_exists(substr($product->thumbnail3, 22, 100))) {
          unlink(substr($product->thumbnail3, 22, 100));
        }
        $image_ext = $image->getClientOriginalExtension();
        $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
        $upload_path = "images/" . $model . "/thumbnail/" . $image_full_name;
        Image::make($request->file('thumbnail3'))->resize($width,  $height)->save($upload_path);
        $product->thumbnail3 = asset($upload_path);
      }
    }
    if ($request->file("thumbnail4")) {
      $image = $request->file("thumbnail4");
      if ($image) {
        if (file_exists(substr($product->thumbnail4, 22, 100))) {
          unlink(substr($product->thumbnail4, 22, 100));
        }
        $image_ext = $image->getClientOriginalExtension();
        $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
        $upload_path = "images/" . $model . "/thumbnail/" . $image_full_name;
        Image::make($request->file('thumbnail4'))->resize($width,  $height)->save($upload_path);
        $product->thumbnail4 = asset($upload_path);
      }
    }
  }
}
