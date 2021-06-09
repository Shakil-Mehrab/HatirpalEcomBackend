<?php

namespace App\Http\Resources\Product;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductIndexResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>Str::limit($this->name,20),
            'slug'=>$this->slug,
            'short_description'=>$this->short_description,
            'description'=>$this->description,
            'price'=>$this->price,
            'thumbnail'=>$this->thumbnail,

            // 'stock_count'=>$this->stockCount(),
        ];
    }
}
