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
use App\Models\Traits\User\RelationWithUser;
use App\Models\Collections\ProductCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, PaginationTrait, ProductColumn, CanBeScoped, RelationWithUser;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
            $model->status = ProductStatus::PENDING;
        });
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
    public function productImages()
    {
        return $this->hasMany('App\Models\ProductImage');
    }
    public function variations()
    {
        return $this->hasMany(ProductVariation::class)->orderBy('order', 'asc');
    }
    // public function inStock(){
    //     return $this->stockCount()>0;
    // }
    public function stockCount()
    {
        return $this->stock->sum('pivot.stock');
    }
    public function stock() //cart controller theke kivabe auto call hoy
    {
        return $this->belongsToMany(Product::class, 'product_stock_view')
            ->withPivot([
                'stock',
                'in_stock'
            ]);
    }
    public function minStock($count)
    {
        return min($this->presentStockCount(), $count);
    }
    public function presentStockCount()
    {
        return $this->stock->sum('pivot.stock'); //cart_user er protteker jonno pro_vari*Pro_vari_stock_view bar call hove
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function productStock()
    {
        return $this->hasOne(Stock::class);
    }
    public function cartProductSize($size_id)
    {
        $size = Size::where('id', $size_id)->first();
        if ($size == null) {
            return "";
        }
        return $size->size;
    }
    public function newCollection(array $models = [])
    {
        return new ProductCollection($models);
    }
}
