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
    public function stock(){
        //jodi product_variation_stock thakto tahole return $this->belongsToMany(Stock::class) dilei hoto
            return $this->belongsToMany(
                ProductVariation::class,'product_variation_stock_view'  ///product variation asbe.mirror tai stock r ekti table ja connected
                )->withPivot([  //product_variation_stock_view theke stock and in_stock
                    'stock',
                    'in_stock'
                ]);
        }
}
