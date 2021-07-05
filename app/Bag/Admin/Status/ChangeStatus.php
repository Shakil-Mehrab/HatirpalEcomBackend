<?php

namespace App\Bag\Admin\Status;

use App\Models\About;
use App\Models\Order;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Condition;

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
    public function supplierStatusChange($slug)
    {
        $data = Supplier::where('slug', $slug)->firstOrFail();
        if ($data->status != 1) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
    }
    public function contactStatusChange($slug)
    {
        $data = Contact::where('slug', $slug)->firstOrFail();
        if ($data->status != 1) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
    }
    public function conditionStatusChange($slug)
    {
        $data = Condition::where('slug', $slug)->firstOrFail();
        if ($data->status != 1) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
    }
    public function aboutStatusChange($slug)
    {
        $data = About::where('slug', $slug)->firstOrFail();
        if ($data->status != 1) {
            $data->status = 1;
        } else {
            $data->status = 0;
        }
        $data->update();
    }
}
