<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends ProductIndexResource
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
            'name'=>$this->name,
            'sizes'=>$this->sizes,
            'productImages'=>$this->productImages,


            'variations' => ProductVariationResource::collection(
                $this->variations->groupBy('type.name') //whole beam and ground er under data dekhay
            ),
        ]);
    }
}
