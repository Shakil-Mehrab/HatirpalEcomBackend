<?php

namespace App\Models;

use App\Models\Traits\HasPrice;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductVariation extends Model
{
    use HasFactory,HasPrice;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->product_variation_type_id = rand(111, 99999);
            $model->slug = Str::uuid();
        });
    }
    public function getPriceAttribute($value){ ///over write if product variation price is null.eta ekhaneo ache abar Has price a o thakbe
        if($value===null){
           return  $this->product->price;
        }
        // return new Money($value);
        return $value;

    }
    public function minStock($count){
        return min($this->stockCount(),$count);
    }
    public function stockCount(){
        return $this->stock->sum('pivot.stock');//cart_user er protteker jonno pro_vari*Pro_vari_stock_view bar call hove
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function productStock()
    {
        return $this->hasOne(Stock::class);
    }
    public function cartProductImage($image_id){
        $productImage=ProductImage::find($image_id);
        return $productImage->thumbnail;
    }
    public function stock()//cart controller theke kivabe auto call hoy
    {
        return $this->belongsToMany(ProductVariation::class,'product_variation_stock_view')
        ->withPivot([  
            'stock',
            'in_stock'
        ]);
    }
}
