<?php

namespace App\Bag\Admin\StoreUpdate;

use App\Models\Stock;
use App\Models\ProductVariation;

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
    $product->shipping_method_id = $request['shipping_method_id'];
    $product->payment_method_id = $request['payment_method_id'];
    $product->subtotal = $request['subtotal'];
  }
  public function productStoreUpdate($product, $request)
  {
    $product->name = $request['name'];
    $product->price = $request['price'];
    $product->brand = $request['brand'];
    $product->short_description = $request['short_description'];
    $product->description = $request['description'];
  }

  public function productPivotData($product, $request)
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
  public function productVariation($product)
  {
    $variation = new ProductVariation();
    $variation->name = "Rakibul";
    $variation->product_id = $product->id;
    $variation->save();
    return $variation;
  }
  public function productStoreStock($variation,$request)
  {
    $stock = new Stock();
    $stock->quantity = $request['stock'];
    $stock->product_variation_id = $variation->id;
    $stock->save();
  }
  public function productUpdateStock($product,$request)
  {
    if(!empty($product->variations[0])){
      $stock =Stock::where('product_variation_id',$product->variations[0]->id)->firstOrFail();
      $stock->quantity = $request['stock'];
      $stock->update();
      return;
     }
   
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
}
