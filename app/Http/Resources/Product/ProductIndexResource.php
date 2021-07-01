<?php

namespace App\Http\Resources\Product;

use Illuminate\Support\Str;
use App\Http\Resources\Size\SizeResource;
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
            'short_description'=>str_replace('"',"",$this->short_description),
            'description'=>str_replace('"','',$this->description),
            'old_price'=>$this->old_price,
            'sale_price'=>$this->sale_price,
            'unit'=>$this->unit,
            'minimum_order'=>$this->minimum_order,
            'waranty'=>$this->waranty,
            'thumbnail'=>$this->thumbnail,
            // 'sizes'=>SizeResource::collection($this->sizes),
            // 'stock_count'=>$this->stockCount(),
        ];
    }
}
