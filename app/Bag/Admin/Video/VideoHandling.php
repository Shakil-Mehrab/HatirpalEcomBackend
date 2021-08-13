<?php

namespace App\Bag\Admin\Video;

use Illuminate\Support\Str;

class VideoHandling
{
    public function uploadVideo($product, $request)
    {
        $image = $request->file("video");
        if ($image) {
            // if (file_exists($product->thumbnail)) {
            //     unlink($product->thumbnail);
            // }
            $image_ext = $image->getClientOriginalExtension();
            $image_full_name = $product->id . '.' . Str::random(10) . "." . $image_ext;
            $upload_path = "videos/";
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $product->video = $image_url;
            }
        }
    }
}
