<?php

namespace App\Bag\Admin\Image;

use Illuminate\Support\Str;
use App\Models\ProductImage;
use Intervention\Image\Facades\Image;

class ImageHandling
{
  public function uploadImage($product,$request,$model){    
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail,22,100))) {
        unlink(substr($product->thumbnail,22,100));
        // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
      }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name =$product->id.'.'. Str::random(10). "." . $image_ext;
      $upload_path = "images/".$model."/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->resize(400, 400)->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
   }
   public function uploadRelatedImage($product, $request)
   {
     $images = $request->file("images");
     if ($images) {
       foreach ($images as $image) {
         $image_ext = $image->getClientOriginalExtension();
         $image_full_name =$product->id.'.'.Str::random(10). "." .$image_ext;
         $upload_path = "images/product/related/" . $image_full_name;
         Image::make($image)->resize(200, 200)->save($upload_path);
         $produtImage = new ProductImage();
         $produtImage->product_id = $product->id;
         $produtImage->thumbnail = asset($upload_path);
         $produtImage->save();
       }
     }
   }
   public function uploadSliderImage($product,$request,$model){    
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail,22,100))) {
        
        unlink(substr($product->thumbnail,22,100));
        // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
      }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name =$product->id.'.'. Str::random(10). "." . $image_ext;
      $upload_path = "images/".$model."/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->resize(400, 300)->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
   }
   public function uploadSupplierImage($product,$request,$model){    
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail,22,100))) {
        
        unlink(substr($product->thumbnail,22,100));
        // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
      }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name =$product->id.'.'. Str::random(10). "." . $image_ext;
      $upload_path = "images/".$model."/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->resize(400, 300)->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
   }
   public function uploadaboutImage($product,$request,$model){    
    $image = $request->file("thumbnail");
    if ($image) {
      if (file_exists(substr($product->thumbnail,22,100))) {
        
        unlink(substr($product->thumbnail,22,100));
        // parse_url($product->thumbnail,PHP_URL_PATH)//it will remove localhost:8000 from linik
      }
      $image_ext = $image->getClientOriginalExtension();
      $image_full_name =$product->id.'.'. Str::random(10). "." . $image_ext;
      $upload_path = "images/".$model."/thumbnail/" . $image_full_name;
      Image::make($request->file('thumbnail'))->resize(400, 300)->save($upload_path);
      $product->thumbnail = asset($upload_path);
    }
   }
}
