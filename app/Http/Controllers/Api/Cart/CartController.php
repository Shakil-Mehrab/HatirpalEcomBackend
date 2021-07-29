<?php

namespace App\Http\Controllers\Api\Cart;

use App\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\Http\Controllers\Controller;
use App\Http\Resources\Cart\CartResource;
use App\Http\Requests\Cart\CartStoreRequest;
use App\Http\Requests\Cart\CartUpdateRequest;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function index(Request $request, Cart $cart)
    {
        $cart->sync();
        $request->user()
            ->load([
                'cart.product',
                'cart.stock',
            ]);
        return (new CartResource($request->user()))
            ->additional([
                'meta' => $this->meta($cart, $request)
            ]);
    }
    protected function meta(Cart $cart, Request $request)
    {
        return [
            'empty' => $cart->isEmpty(),
            'subtotal' => $cart->subtotal(),
            'total' => $cart->withShipping($request->shipping_method_id)->total(), //shippping_method_id=address_id
            // 'subtotal'=>$cart->subtotal()->formatted(),
            // 'total'=>$cart->withShipping($request->shipping_method_id)->total()->formatted(),
            'changed' => $cart->hasChanged(),
        ];
    }
    public function store(Cart $cart, CartStoreRequest $request)
    {
        $product = array(
            'id' => $request['products'][0]['product_id'],
            'quantity' => $request['products'][0]['quantity'],
            'product_image' => $request['products'][0]['image'],
            'size_id' => $request['products'][0]['size_id'],
        );
        return $cart->add($product);
    }
    public function update($cartId, Request $request, Cart $cart)
    {
        $cart->update($cartId, $request->quantity, $request->size_id);
    }
    public function destroy($cartId, Cart $cart)
    {
        return $cart->delete($cartId);
    }
    public function show()
    {
        return "this cart controller show function it can be called for get update route.be carefull";
    }
}
