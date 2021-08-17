<?php

namespace App\Bag\Admin\Video;

use Illuminate\Support\Str;

class VideoHandling
{
    public function uploadVideo($product, $request)
    {
        $video = $request->file("video");
        if ($video) {
            if (file_exists($product->video)) {
                unlink($product->video);
            }
            $video_ext = $video->getClientOriginalExtension();
            $video_full_name = $product->id . '.' . Str::random(10) . "." . $video_ext;
            $upload_path = "public/videos/";
            $video_url = 'storage/videos/' . $video_full_name;
            $success = $video->storeAs($upload_path, $video_full_name);
            if ($success) {
                $product->video = $video_url;
            }
        }
    }
}