<?php

namespace App\Http\Resources\Address;

use App\Http\Resources\Address\AddressResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'slug'=>$this->slug,
            'address'=>$this->address,
            'country'=>$this->country,
            'division'=>$this->division,
            'district'=>$this->district,
            'place'=>$this->delivery_place,
            'postal_code'=>$this->postal_code,
            'expense'=>$this->expense,
            'default'=>$this->default,
        ];
    }
}
