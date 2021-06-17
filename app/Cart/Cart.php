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
        dd('ok');
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
    public function update($productId,$quantity){
        $this->user->cart()->updateExistingPivot($productId,[
            'quantity'=>$quantity
        ]);
    }
    public function sync(){
        $this->user->cart->each(function($product){//here $product=$variation
            // dd($product->pivot->quantity);
            $quantity=$product->minStock($product->pivot->quantity);//$product->pivot->quantity from cart_user

            // $quantity hocche cart_user pro_vari quantity and pro_vari_stock_view er moddhe j minimum
            // $this->changed=$quantity != $product->pivot->quantity;
            if($quantity != $product->pivot->quantity){
                $this->changed=true;
            }
            // dd($quantity != $product->pivot->quantity); false and trie dekahay
            $product->pivot->update([
                'quantity'=>$quantity,
            ]);
        });
    }
    public function hasChanged(){
        return $this->changed;
    }
    public function delete($productId){
        $this->user->cart()->detach($productId);
    }
    public function empty(){
        $this->user->cart()->detach();
    }
    public function isEmpty(){
      return $this->user->cart->sum('pivot.quantity')<=0;
    }
//     public function subtotal(){
//         $subtotal=$this->user->cart->sum(function($product){
//             return $product->price->amount()*$product->pivot->quantity; 
// 
//         });
//         return new Money($subtotal);
//     }
//     public function total(){
//         if($this->shipping){
//           return $this->subtotal()->add($this->shipping->price);
//         }
//         return $this->subtotal();
//     }
    protected function getStorePayload($productVariations){//product variations $products from request
       return collect($productVariations)->keyBy('id')->map(function($productVariation){
            return[
                'quantity'=>$productVariation['quantity'] + $this->getCurrentQuantity($productVariation['id'])//pro_var id from request
            ];
        })
        ->toArray();
    }
    protected function getCurrentQuantity($productVariationId){ //pro_var id
        // dd( $this->user->cart());
        if($productVariation = $this->user->cart->where('id',$productVariationId)->first()){
            return $productVariation->pivot->quantity;
        }
        return 0;
    }

}