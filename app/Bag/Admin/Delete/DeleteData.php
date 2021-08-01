<?php

namespace App\Bag\Admin\Delete;

use App\Models\User;
use App\Models\About;
use App\Models\Order;
use App\Models\Region;
use App\Models\Slider;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Condition;
use App\Models\ProductImage;
use App\Models\ShippingMethod;

class DeleteData
{
    public function dataDelete($slug, $modelPath)
    {
        $data = $modelPath::where('slug', $slug)->firstOrFail();
        $this->relatedImageCheck($data, $modelPath);
        $this->fileCheck($data);
        $data->delete();
    }

    public function relatedImageCheck($data, $modelPath)
    {
        if ($modelPath == 'App\Models\Product') {
            if (count($data->productImages)) {
                foreach ($data->productImages as $pro) {
                    $this->fileCheck($pro);
                }
            }
        }
    }
    public static function fileCheck($data)
    {
        if (file_exists(substr($data->thumbnail, 22, 100))) {
            unlink(substr($data->thumbnail, 22, 100));
        }
    }
}
