<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariation extends Model
{
    use HasFactory;
    public static function booted(){
        static::creating(function(Model $model)
        {
            $model->product_variation_type_id=rand(111, 99999);
            $model->slug=Str::uuid();

        });
    }
    public function productStock(){
      return $this->hasOne(Stock::class);
    }
}
