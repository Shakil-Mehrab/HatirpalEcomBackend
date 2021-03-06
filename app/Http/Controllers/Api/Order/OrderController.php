<?php

namespace App\Http\Controllers\Api\Order;

use App\Cart\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\Order\OrderCreated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Order\MailForCreatedOrder;
use App\Http\Requests\Order\OrderRequest;
use App\Http\Resources\Order\OrderResource;

class OrderController extends Controller
{
    protected $cart;
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
        $this->middleware(['cart.sync', 'cart.isnotempty'])->only('store');
    }
    public function index(Request $request)
    {

        $orders = $request->user()->orders()
            ->with([
                'products',
                'address',
                // 'products.stock',
                // 'products.product',
                // 'products.product.variations',
                // 'products.product.variations.stock',
                // 'address','shippingMethod'
            ])
            ->latest()
            ->paginate(2);
        return OrderResource::collection($orders);
    }
    public function store(OrderRequest $request, Cart $cart)
    {
        $order = $this->createOrder($request, $cart);
        $this->forSyncing($order);
        //   $order->load(['shippingMethod']);//resource load
        event(new OrderCreated($order));
        Mail::to("mehrabhoussainshakil4@gmail.com")->send(new MailForCreatedOrder($order));
        return new OrderResource($order);
    }

    protected function forSyncing($order)
    {
        foreach (auth()->user()->cart as $product) {
            $order->products()->attach(
                $product->id,
                [
                    'quantity' => $product->pivot->quantity,
                    'product_image' => $product->pivot->product_image,
                    'size_id' => $product->pivot->size_id,
                    'user_id' => auth()->user()->id,
                ]
            );
        }
    }
    public function show($slug)
    {
        $order = Order::where('slug', $slug)->first();
        $order->load(['address']);
        return new OrderResource($order);
    }
    protected function createOrder(Request $request, Cart $cart)
    {
        return $request->user()->orders()->create(
            array_merge($request->only(['address_id', 'shipping_method']), [
                'subtotal' => $cart->subtotal(),
                'total' => $cart->withShipping($request->address_id)->total(),
                // 'subtotal'=>$cart->subtotal()->amount() //cart a Money ache.sekhane amount()

            ])
        );
    }
}