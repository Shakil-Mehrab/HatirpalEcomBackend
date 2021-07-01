<?php

namespace App\Http\Resources\Product;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>Str::limit($this->name,20),
            'slug'=>$this->slug,
            'qty'=>$this->pivot->quantity,
            "size"=> $this->pivot->size,
            "thumbnail"=> $this->cartProductImage($this->pivot->product_image_id),
        ];
    }
}
