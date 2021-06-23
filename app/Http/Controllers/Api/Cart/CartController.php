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
        $cart->sync();
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
    public function store(Cart $cart,CartStoreRequest $request){
        // return $request['products'][0]['quantity'];
        $products=array(
            array(
                'id'=>$request['products'][0]['product_id'],
                'quantity'=>$request['products'][0]['quantity'],
                'product_image_id'=>$request['products'][0]['image_id'],
                'size_id'=>$request['products'][0]['size_id'],
            ),
            // array(
            //     'id'=>'103',
            //     'quantity'=>'5',
            //     'product_image_id'=>3,
            //     'size_id'=>2
            // )
            );
            // return $products;

        $cart->add($products);
    }
    public function update($productId,Request $request,Cart $cart){
        $cart->update($productId, $request->quantity,$request->size_id);
        // $cart->update(3, 10,3);
    }
    public function destroy($productId,Cart $cart){
        $cart->delete($productId);
    }
    public function show(){
        return "this cart controller show function it can be called for get update route.be carefull";
    }
}
