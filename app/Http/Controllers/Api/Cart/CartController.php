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
   
    public function __construct(){
        $this->middleware('auth:sanctum');
    }
    public function index(Request $request,Cart $cart){
        // return 'hi';
        $cart->sync();//cart_user er quantity mirror table er quantity compare kore min ta cart user a update
        $request->user();
        // ->load([
        //     'cart.product',
        //     'cart.product.variations.stock',
        //     'cart.stock',
        //     'cart.type'
        //     ]);
       return (new CartResource($request->user()))
       ->additional([
        'meta'=>$this->meta($cart,$request)
       ]);
    }
    protected function meta(Cart $cart,Request $request){
        return[
            'empty'=>$cart->isEmpty(),
            'subtotal'=>$cart->subtotal(),
            'total'=>$cart->withShipping($request->shipping_method_id)->total(),
            // 'subtotal'=>$cart->subtotal()->formatted(),
            // 'total'=>$cart->withShipping($request->shipping_method_id)->total()->formatted(),
            'changed'=>$cart->hasChanged(),
        ];
    }
    public function store(Cart $cart,Request $request){
        // return $request->all();
        $productVariations=array(
            array(
                'id'=>$request[0]['variation_id'],
                'quantity'=>$request[0]['quantity'],
                'product_image_id'=>$request[0]['image_id'],
                'size_id'=>$request[0]['size_id'],
            ),
            // array(
            //     'id'=>'3',
            //     'quantity'=>'5',
            //     'product_image_id'=>3,
            //     'size_id'=>2
            // )
            );
        $cart->add($productVariations);
    }
    // ProductVariation $productVariation, Request $request,Cart $cart
    public function update(Cart $cart){
        // return 'ok';
        // $cart->update($productVariation->id, $request->quantity);
        $cart->update(3, 15);
    }
    public function destroy(ProductVariation $productVariation,Cart $cart){
        $cart->delete($productVariation->id);
    }
    public function show(){
        return "this cart controller show function it can be called for get update route.be carefull";
    }
}
