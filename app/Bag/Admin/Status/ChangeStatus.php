<?php

namespace App\Bag\Admin\Status;

use App\Models\Order;
use App\Models\Slider;
use App\Models\Product;

class ChangeStatus
{
    public function productStatusChange($slug)
    {
        $data = Product::where('slug', $slug)->firstOrFail();
        if ($data->status != 'published') {
            $data->status = 'published';
        } else {
            $data->status = 'pending';
        }
        $data->update();
    }
    public function orderStatusChange($slug)
    {
        $data = Order::where('slug', $slug)->firstOrFail();
        if ($data->status != 'published') {
            $data->status = 'published';
        } else {
            $data->status = 'pending';
        }
        $data->update();
    }
    public function sliderStatusChange($slug)
    {
        $data = Slider::where('slug', $slug)->firstOrFail();
        if ($data->status != 1) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
    }
}
