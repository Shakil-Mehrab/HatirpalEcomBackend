<?php

namespace App\Http\Resources\Region;

use Illuminate\Http\Resources\Json\JsonResource;

class RegionIndexResource extends JsonResource
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
            "id"=>$this->id,
            "name"=>$this->name,
            "expense"=>$this->expense,
            "slug"=>$this->slug
        ];
    }
}
