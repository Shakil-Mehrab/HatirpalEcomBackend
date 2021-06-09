<?php

namespace App\Http\Resources\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'uuid'=>$this->uuid,
            'name'=>Str::limit($this->name,30,''),
            'slug'=>$this->slug,
            'children'=>CategoryResource::collection($this->whenLoaded('children')),
        ];
    }
}
