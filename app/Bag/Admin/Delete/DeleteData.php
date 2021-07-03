<?php

namespace App\Bag\Admin\Delete;

use App\Models\User;
use App\Models\Order;
use App\Models\Region;
use App\Models\Address;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ProductImage;
use App\Models\ShippingMethod;
use App\Models\Slider;
use App\Models\Supplier;

class DeleteData
{
    public function productDelete($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        if(count($product->productImages)){
            foreach($product->productImages as $pro)
            $this->fileCheck($pro);
           }
           $this->fileCheck($product);
        $product->delete();
    }
    public function productImageDelete($slug)
    {
        $product = ProductImage::where('slug', $slug)->firstOrFail();
        $this->fileCheck($product);
        $product->delete();
    }
    public function catDelete($slug)
    {
        $product = Category::where('slug', $slug)->firstOrFail();
        $product->delete();
       
    }
    public function regionDelete($slug)
    {
        $product = Region::where('slug', $slug)->firstOrFail();
        $product->delete();
    }
    public function addressDelete($slug)
    {
        $product = Address::where('slug', $slug)->firstOrFail();
        $product->delete();
    }
    public function orderDelete($slug)
    {
        $product = Order::where('slug', $slug)->firstOrFail();
        $product->delete();
    }
    public function userDelete($slug)
    {
        $product = User::where('slug', $slug)->firstOrFail();
       $this->fileCheck($product);
        $product->delete();
    }
    public function shippingMethodDelete($slug)
    {
        $product = ShippingMethod::where('slug', $slug)->firstOrFail();
       $this->fileCheck($product);
        $product->delete();
    }
    public function sliderDelete($slug)
    {
        $product = Slider::where('slug', $slug)->firstOrFail();
       $this->fileCheck($product);
        $product->delete();
    }
    public function supplierDelete($slug)
    {
        $product = Supplier::where('slug', $slug)->firstOrFail();
       $this->fileCheck($product);
        $product->delete();
    }
    public function contactDelete($slug)
    {
        $product = Contact::where('slug', $slug)->firstOrFail();
       $this->fileCheck($product);
        $product->delete();
    }
    public static function fileCheck($data){
        if (file_exists(substr($data->thumbnail,22,100))) {
            unlink(substr($data->thumbnail,22,100));
          }
    }
    
}
