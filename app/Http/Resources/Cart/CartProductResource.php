<?php

namespace App\Http\Resources\Cart;

use App\Http\Resources\Size\SizeResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductIndexResource;

class CartProductResource extends ProductIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), [
            'sizes' => SizeResource::collection($this->sizes), //ajaira product r stock call hoye array barche.tai faka kore dichi
            // 'stock'=>'',
            'cart_id' => $this->pivot->id,
            'quantity' => $this->pivot->quantity,
            'size_id' => $this->pivot->size_id,
            'thumbnail' => $this->pivot->product_image,
            // 'total' => $this->getTotal()->formatted(),
            'total' => $this->getTotal(),
        ]);
    }
    protected function getTotal()
    {
        return $this->pivot->quantity * $this->sale_price;
        // return new Money($this->pivot->quantity * $this->price->amount());
    }
}
