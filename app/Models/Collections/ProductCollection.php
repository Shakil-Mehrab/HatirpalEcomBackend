<?php

namespace App\Models\Collections;

use Illuminate\Database\Eloquent\Collection;

class ProductCollection extends Collection
{
    public function forSyncing(){
        return $this->keyBy('id')->map(function($product){
            return [
                'quantity'=>$product->pivot->quantity,
                'product_image_id'=>$product->pivot->product_image_id,
                'size_id'=>$product->pivot->size_id,
            ];
        })->toArray();

    }
}
