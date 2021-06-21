<?php

namespace App\Cart;
use App\Models\User;
use App\Models\ShippingMethod;

class Cart
{
    protected $user;
    protected $changed=false;
    protected $shipping;

    public function __construct($user){
        $this->user=$user;
    }
    public function products(){
        return $this->user->cart;//product_variation
    }
    public function withShipping($shippingId){
        $this->shipping=ShippingMethod::find($shippingId);
        return $this;
    }
    public function add($productVariations){

        $this->user->cart()->syncWithoutDetaching(
            $this->getStorePayload($productVariations)
        );
    }
    public function update($productVariationId,$quantity,$size_id){
        $this->user->cart()->updateExistingPivot($productVariationId,[
            'quantity'=>$quantity,
            'size_id'=>$size_id
        ]);
    }
    public function sync(){
        $this->user->cart->each(function($productVariation){
            $quantity=$productVariation->minStock($productVariation->pivot->quantity);
            if($quantity != $productVariation->pivot->quantity){
                $this->changed=true;
            }
            $productVariation->pivot->update([
                'quantity'=>$quantity,
            ]);
        });
    }
    public function hasChanged(){
        return $this->changed;
    }
    public function delete($productCariationId){
        $this->user->cart()->detach($productCariationId);
    }
    public function empty(){
        $this->user->cart()->detach();
    }
    public function isEmpty(){
      return $this->user->cart->sum('pivot.quantity')<=0;//sync a update korar pore jodi 0 or nagative hoy
    }
    public function subtotal(){
        $subtotal=$this->user->cart->sum(function($productVariation){
            // return $productVariation->price->amount()*$productVariation->pivot->quantity; 
            return $productVariation->product->price*$productVariation->pivot->quantity; 
        });
        // return new Money($subtotal);
        return $subtotal;

    }
    public function total(){
        if($this->shipping){
          return $this->subtotal()->add($this->shipping->price);
        }
        return $this->subtotal();
    }
    protected function getStorePayload($productVariations){
       return collect($productVariations)->keyBy('id')->map(function($productVariation){
            return[
                'quantity'=>$productVariation['quantity'] + $this->getCurrentQuantity($productVariation['id']),
                'product_image_id'=>$productVariation['product_image_id'],
                'size_id'=>$productVariation['size_id'],
            ];
        })
        ->toArray();
    }
    protected function getCurrentQuantity($productVariationId){ 
        if($productVariation = $this->user->cart->where('id',$productVariationId)->first()){
            return $productVariation->pivot->quantity;
        }
        return 0;
    }

}