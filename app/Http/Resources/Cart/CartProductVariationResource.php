<?php

namespace App\Http\Resources\Cart;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Product\ProductIndexResource;

class CartProductVariationResource extends JsonResource
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
            'product' => new ProductIndexResource($this->product),
            'quantity' => $this->pivot->quantity,
            // 'total' => $this->getTotal()->formatted(),
        ]);
    }
    protected function getTotal()
    {
        // return new Money($this->pivot->quantity * $this->price->amount());
    }
}
