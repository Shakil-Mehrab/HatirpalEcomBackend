<?php

namespace App\Http\Resources\Product;

use Illuminate\Support\Str;
use App\Http\Resources\Size\SizeResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Category\CategoryResource;

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
            'id' => $this->id,
            'name' => Str::limit($this->name, 16),
            'full_name' => $this->name,
            'slug' => $this->slug,
            'brand' => $this->brand,
            'short_description' => Str::limit(str_replace('"', "", $this->short_description), 40),
            'description' => str_replace('"', '', $this->description),
            'old_price' => $this->old_price,
            'sale_price' => $this->sale_price,
            'unit' => $this->unit,
            'minimum_order' => $this->minimum_order,
            'waranty' => $this->waranty,
            'thumbnail' => $this->profilePhotoUrl,
            // 'sizes'=>SizeResource::collection($this->sizes),
            'stock_count' => $this->stockCount(),
            // 'in_stock'=>$this->inStock(),
            'categories' => CategoryResource::collection($this->categories),


        ];
    }
}
