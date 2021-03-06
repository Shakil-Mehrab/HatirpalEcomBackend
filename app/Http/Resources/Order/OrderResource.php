<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Address\AddressIndexResource;
use App\Http\Resources\Product\ProductOrderResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            "order_id"=>$this->order_id,
            'slug'=>$this->slug,
            'status'=>$this->status,
            'payment_method'=>$this->payment_method,
            'payment_id'=>$this->payment_id,
            'payment_status'=>$this->payment_status,
            'created_at'=>$this->created_at->toDateTimeString(),
            'created_at_humans'=>$this->created_at->diffForhumans(),
            'shippingMethod'=> $this->shipping_method,
            // 'subtotal'=>$this->subtotal->formatted(),
            'subtotal'=>$this->subtotal,
            // 'total'=>$this->total()->formatted(),
            'total'=>$this->total,
            'products'=>ProductOrderResource::collection($this->whenLoaded('products')),
            'address'=> new AddressIndexResource($this->whenLoaded('address')),
            // 'shippingMethod'=> new ShippingMethodResource($this->whenLoaded('shippingMethod')),

        ];
    }
}
