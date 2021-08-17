<?php

namespace App\Bag\Admin\Image;

use Illuminate\Support\Str;
use App\Models\ProductImage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageHandling
{
    public function uploadImage($product, $request, $model, $width = 400, $height = "400")
    {
        $image = $request->file("thumbnail");
        if ($image) {
            if (file_exists($product->thumbnail)) {
                unlink($product->thumbnail);
                // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
            }
            $image_ext = $image->getClientOriginalExtension();
            $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
            $upload_path = "public/images/" . $model . "/thumbnail/" . $image_full_name;
            $image_url = "storage/images/" . $model . "/thumbnail/" . $image_full_name;
            $img = Image::make($image)->resize($width,  $height)->encode('jpg');
            Storage::put($upload_path, $img);
            $product->thumbnail = $image_url;
        }
    }
    public function uploadRelatedImage($product, $request)
    {
        $images = $request->file("images");
        if ($images) {
            foreach ($images as $image) {
                $image_ext = $image->getClientOriginalExtension();
                $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
                $upload_path = "public/images/product/related/" . $image_full_name;
                $image_url = "storage/images/product/related/" . $image_full_name;
                $img = Image::make($image)->resize(400,  400)->encode('jpg');
                Storage::put($upload_path, $img);
                $produtImage = new ProductImage();
                $produtImage->product_id = $product->id;
                $produtImage->thumbnail = $image_url;
                $produtImage->save();
            }
        }
    }
    public function uploadSupplerDocument($product, $request, $model, $width = 400, $height = "400")
    {
        if ($request->file("thumbnail1")) {
            $image = $request->file("thumbnail1");
            if ($image) {
                if (file_exists($product->thumbnail1)) {
                    unlink($product->thumbnail1);
                }
                $image_ext = $image->getClientOriginalExtension();
                $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
                $upload_path = "public/images/supplier/thumbnail1/" . $image_full_name;
                $image_url = "storage/images/supplier/thumbnail1/" . $image_full_name;
                $img = Image::make($image)->resize($width,  $height)->encode('jpg');
                Storage::put($upload_path, $img);
                $product->thumbnail1 = $image_url;
            }
        }
        if ($request->file("thumbnail2")) {
            $image = $request->file("thumbnail2");
            if ($image) {
                if (file_exists($product->thumbnail2)) {
                    unlink($product->thumbnail2);
                }
                $image_ext = $image->getClientOriginalExtension();
                $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
                $upload_path = "public/images/supplier/thumbnail2/" . $image_full_name;
                $image_url = "storage/images/supplier/thumbnail2/" . $image_full_name;
                $img = Image::make($image)->resize($width,  $height)->encode('jpg');
                Storage::put($upload_path, $img);
                $product->thumbnail2 = $image_url;
            }
        }
        if ($request->file("thumbnail3")) {
            $image = $request->file("thumbnail3");
            if ($image) {
                if (file_exists($product->thumbnail3)) {
                    unlink($product->thumbnail3);
                }
                $image_ext = $image->getClientOriginalExtension();
                $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
                $upload_path = "public/images/supplier/thumbnail3/" . $image_full_name;
                $image_url = "storage/images/supplier/thumbnail3/" . $image_full_name;
                $img = Image::make($image)->resize($width,  $height)->encode('jpg');
                Storage::put($upload_path, $img);
                $product->thumbnail3 = $image_url;
            }
        }
        if ($request->file("thumbnail4")) {
            $image = $request->file("thumbnail4");
            if ($image) {
                if (file_exists($product->thumbnail4)) {
                    unlink($product->thumbnail4);
                }
                $image_ext = $image->getClientOriginalExtension();
                $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
                $upload_path = "public/images/supplier/thumbnail4/" . $image_full_name;
                $image_url = "storage/images/supplier/thumbnail4/" . $image_full_name;
                $img = Image::make($image)->resize($width,  $height)->encode('jpg');
                Storage::put($upload_path, $img);
                $product->thumbnail4 = $image_url;
            }
        }
    }
}