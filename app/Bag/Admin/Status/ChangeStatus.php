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
    public function statusChange($slug, $modelPath, $status)
    {
        $data = $modelPath::where('slug', $slug)->firstOrFail();
        $data->status = $status;
        $data->update();
        return $data;
    }
}