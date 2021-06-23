<?php

namespace App\Http\Resources\Cart;

use App\Http\Resources\Size\SizeResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Cart\CartProductResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductImageResource;
use App\Http\Resources\Product\ProductIndexResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'products'=>CartProductResource::collection($this->cart),
            // 'size_id' => $this->size_id,
            // 'thumbnail' => cartProductImage($this->product_image_id),



        ];
    }
}
