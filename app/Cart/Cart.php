<?php

namespace App\Cart;

use App\Models\User;
use App\Models\Address;
use App\Models\CartUser;
use App\Models\Product;
use App\Models\ShippingMethod;

class Cart
{
    protected $user;
    protected $changed = false;
    protected $shipping;

    public function __construct($user)
    {
        $this->user = $user;
    }
    public function products()
    {
        return $this->user->cart;
    }
    public function withShipping($shippingId)
    {

        $this->shipping = Address::find($shippingId);
        return $this;
    }
    public function add($products)
    {

        $cartProduct = $this->user->cartProduct($products[0]['id'], $products[0]['size_id'], $products[0]['product_image'])->get();

        if ($cartProduct->count() > 0) {
            $this->user->cart()->syncWithoutDetaching(
                $this->getStorePayload($products)
            );
            return "sync done";
        }
        $this->addNewProduct($products);
        return "New added done";
    }
    public function update($cartId, $quantity, $size_id)
    {
        $this->user->userSpecificCart($cartId)->update([
            'quantity' => $quantity,
            'size_id' => $size_id
        ]);
    }
    public function sync()
    {
        $this->user->cart->each(function ($product) {
            $quantity = $product->minStock($product->pivot->quantity);
            if ($quantity != $product->pivot->quantity) {
                $this->changed = true;
            }
            $product->pivot->update([
                'quantity' => $quantity,
            ]);
        });
    }
    public function hasChanged()
    {
        return $this->changed;
    }
    public function delete($cartId)
    {
        return $this->user->userSpecificCart($cartId)->delete();
    }
    public function empty()
    {
        $this->user->cart()->detach();
    }
    public function isEmpty()
    {
        return $this->user->cart->sum('pivot.quantity') <= 0; //sync a update korar pore jodi 0 or nagative hoy
    }
    public function subtotal()
    {
        $subtotal = $this->user->cart->sum(function ($product) {
            // return $product->sale_price->amount()*$product->pivot->quantity; 
            return $product->sale_price * $product->pivot->quantity;
        });
        // return new Money($subtotal);
        return $subtotal;
    }
    public function total()
    {
        if ($this->shipping) {
            return $this->subtotal() + $this->shipping->expense;
        }
        return $this->subtotal();
    }
    protected function getStorePayload($products)
    {
        return collect($products)->keyBy('id')->map(function ($product) {
            return [
                'quantity' => $product['quantity'] + $this->getCurrentQuantity($product['id']),
                'product_image' => $product['product_image'],
                'size_id' => $product['size_id'],
            ];
        })
            ->toArray();
    }
    protected function getCurrentQuantity($productId)
    {
        if ($product = $this->user->cart->where('id', $productId)->first()) {
            return $product->pivot->quantity;
        }
        return 0;
    }
    protected function addNewProduct($products)
    {
        $cart = new CartUser();
        $cart->product_id = $products[0]['id'];
        $cart->user_id = $this->user->id;
        $cart->size_id = $products[0]['size_id'];
        $cart->product_image = $products[0]['product_image'];
        $cart->quantity = $products[0]['quantity'];
        $cart->save();
    }
}
