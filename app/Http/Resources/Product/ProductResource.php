<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Size\SizeResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Category\CategoryResource;

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
            // 'name' => $this->name,
            'productImages' => ProductImageResource::collection($this->productImages),
            'sizes' => SizeResource::collection($this->sizes),
            // 'categories' => CategoryResource::collection($this->categories),

        ]);
    }
}
