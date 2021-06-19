<?php

namespace App\Http\Resources\Size;

use Illuminate\Http\Resources\Json\JsonResource;

class SizeResource extends JsonResource
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
            'size'=>$this->size,
            'id'=>$this->id,
        ];
    }
}
