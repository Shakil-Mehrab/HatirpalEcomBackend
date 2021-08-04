<?php

namespace App\Bag\Admin\StoreUpdate;

use App\Models\Stock;
// use App\Models\ProductVariation;

class StoreUpdateData
{
    public function categoryStoreUpdate($product, $request)
    {
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->icon = $request['icon'];
        $product->parent_id = $request['parent_id'];
    }
    public function orderStoreUpdate($product, $request)
    {
        $product->address_id = $request['address_id'];
        $product->shipping_method = $request['shipping_method'];
        $product->payment_method = $request['payment_method'];
        $product->subtotal = $request['subtotal'];
        $product->total = $request['total'];
        $product->status = $request['status'];
    }
    public function productStoreUpdate($product, $request)
    {
        $product->name = $request['name'];
        $product->old_price = $request['old_price'];
        $product->sale_price = $request['sale_price'];
        $product->unit = $request['unit'];
        $product->discount = $this->discount($request);
        $product->brand = $request['brand'];
        $product->short_description = $request['short_description'];
        $product->description = $request['description'];
        $product->minimum_order = $request['minimum_order'];
        $product->waranty = $request['waranty'];
    }
    public function supplierStoreUpdate($product, $request)
    {
        $product->country = $request['country'];
        $product->phone = $request['phone'];
        $product->email = $request['email'];
        $product->description = $request['description'];
        $product->address = $request['address'];
        $product->company_type = $request['company_type'];
        $product->company_name = $request['company_name'];
    }
    public function contactStoreUpdate($product, $request)
    {
        $product->phone_no1 = $request['phone_no1'];
        $product->phone_no2 = $request['phone_no2'];
        $product->email = $request['email'];
        $product->address = $request['address'];
        $product->link = $request['link'];
    }
    public function conditionStoreUpdate($product, $request)
    {
        $product->short_description = $request['short_description'];
        $product->description = $request['description'];
    }
    public function aboutStoreUpdate($product, $request)
    {
        $product->heading = $request['heading'];
        $product->short_description = $request['short_description'];
        $product->description = $request['description'];
    }


    public function  productPivotData($product, $request)
    {
        $product->categories()
            ->sync(
                $request['category_id']
            );
        $product->sizes()
            ->sync(
                $request['size_id']
            );
        return;
    }

    public function productStoreStock($product, $request)
    {
        $stock = new Stock();
        $stock->quantity = $request['stock'];
        $stock->product_id = $product->id;
        $stock->save();
    }
    public function productUpdateStock($product, $request)
    {
        $stock = Stock::where('product_id', $product->id)->first();
        if ($stock) {
            $stock->quantity = $request['stock'];
            $stock->update();
            return;
        }
        $this->productStoreStock($product, $request);
    }
    public function shippingMethodstoreUpdate($product, $request)
    {
        $product->name = $request['name'];
        $product->price = $request['price'];
    }
    public function addressStoreUpdate($product, $request)
    {
        $product->country_id = 2;
        $product->division_id = $request['division_id'];
        $product->district_id = $request['district_id'];
        $product->place_id = $request['place_id'];
        $product->address = $request['address'];
        $product->postal_code = $request['postal_code'];
    }
    public function sliderStoreUpdate($product, $request)
    {
        $product->heading = $request['heading'];
    }
    protected function discount($request)
    {
        if ($request['old_price'] == 0) {
            $discount = 0;
        } else {
            $discount = (($request['old_price'] - $request['sale_price']) / $request['old_price']) * 100;
        }
        return $discount;
    }
}