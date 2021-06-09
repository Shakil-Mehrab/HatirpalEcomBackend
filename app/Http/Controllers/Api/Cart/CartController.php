<?php

namespace App\Http\Controllers\Api\Cart;

use App\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductVariation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cart\CartStoreRequest;
use App\Http\Requests\Cart\CartUpdateRequest;

class CartController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request,Cart $cart){
        $cart->sync();
        $request->user()->load([  // n+ problem
            'cart.product',
            'cart.product.variations.stock',
            'cart.stock',
            'cart.type'
            ]);
        // dd($cart);
    //    return (new CartResource($request->user())) ///only auth user er jonno single time call tai new
    //    ->additional([
    //     'meta'=>$this->meta($cart,$request)
    //    ]);
    }
    protected function meta(Cart $cart,Request $request){
        return[
            'empty'=>$cart->isEmpty(),
            'subtotal'=>$cart->subtotal()->formatted(),
            'total'=>$cart->withShipping($request->shipping_method_id)->total()->formatted(),
            'changed'=>$cart->hasChanged(),// min stock er cheye cart_user er product besi hole true te update hoy sync kore
        ];
    }
    public function store(CartStoreRequest $request,Cart $cart){
        dd($request->all());
        $productVariations=array(
            array(
                'id'=>'7',
                'quantity'=>'5',
            ),
            array(
                'id'=>'6',
                'quantity'=>'5',
            )
            );
           
        $cart->add($productVariations);
    }
    public function update(ProductVariation $productVariation, CartUpdateRequest $request,Cart $cart){
        $cart->update($productVariation->id, $request->quantity);
    }
    public function destroy(ProductVariation $productVariation,Cart $cart){
        $cart->delete($productVariation->id);
    }
}
