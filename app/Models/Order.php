<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Order\OrderColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory,PaginationTrait,OrderColumn;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted(){
        static::creating(function(Model $model){
            $model->slug=Str::uuid();
        });
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category')
            ->withTimestamps();
    }
}
