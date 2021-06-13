<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Bag\Product\ProductStatus;
use App\Models\Traits\CanBeScoped;
use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Product\ProductColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,PaginationTrait,ProductColumn,CanBeScoped;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted(){
        static::creating(function(Model $model){
            $model->uuid=Str::uuid();
            $model->status = ProductStatus::PENDING;
        });
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category')
            ->withTimestamps();
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size')
            ->withTimestamps();
    }
    public function productImages(){
        return $this->hasMany('App\Models\ProductImage');
     }
     public function variations(){
        return $this->hasMany(ProductVariation::class)->orderBy('order','asc');
    }
   
}
