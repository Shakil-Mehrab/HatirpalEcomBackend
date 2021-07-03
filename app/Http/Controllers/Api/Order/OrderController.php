<?php

namespace App\Http\Controllers\Api\Order;

use App\Cart\Cart;
use Illuminate\Http\Request;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Resources\Order\OrderResource;

class OrderController extends Controller
{
    protected $cart;
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
        $this->middleware(['cart.sync','cart.isnotempty'])->only('store');//only store er upor kaj korbe
    }
    public function index(Request $request){
        $orders=$request->user()->orders()
        ->with([
            'products',
            // 'products.stock',
            // 'products.type',
            // 'products.product',
            // 'products.product.variations',
            // 'products.product.variations.stock',
            // 'address','shippingMethod'
        ])
        ->latest()
        ->paginate(10);
        return OrderResource::collection($orders);
    }
    public function store(OrderRequest $request,Cart $cart)
    {
        $order = $this->createOrder($request,$cart);
      
        $order->products()->sync(
            $cart->products()->forSyncing()
        ); 
        //   $order->load(['shippingMethod']);//resource load
        event(new OrderCreated($order));
        return new OrderResource($order);
    }
    protected function createOrder(Request $request,Cart $cart){
        return $request->user()->orders()->create(
            array_merge($request->only(['address_id','shipping_method','payment_method']),[
                'subtotal'=>$cart->subtotal(),
                'total'=>$cart->withShipping($request->address_id)->total()
                // 'subtotal'=>$cart->subtotal()->amount() //cart a Money ache.sekhane amount()

            ])
        );
    }
}


