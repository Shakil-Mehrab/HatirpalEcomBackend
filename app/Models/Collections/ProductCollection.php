<?php

namespace App\Models\Collections;

use Illuminate\Database\Eloquent\Collection;

class ProductCollection extends Collection
{
    public function forSyncing()
    {
        return $this->keyBy('id')->map(function ($product) {
            return [
                'quantity' => $product->pivot->quantity,
                'product_image' => $product->pivot->product_image,
                'size_id' => $product->pivot->size_id,
                'user_id' => auth()->user()->id,
            ];
        })->toArray();
    }
}
