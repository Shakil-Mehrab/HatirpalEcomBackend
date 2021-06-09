<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory,PaginationTrait;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted(){
        static::creating(function(Model $model){
            $model->slug=Str::uuid();
        });
    }
    public static function columns()
    {
        return collect(Schema::getColumnListing(ProductImage::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['deleted_at','description','short_description','updated_at','created_at','uuid']);

            })
            ->toArray();
    }
}
