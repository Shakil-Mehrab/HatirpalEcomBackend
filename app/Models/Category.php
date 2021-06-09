<?php

namespace App\Models;

use Illuminate\Support\Str;
use Kalnoy\Nestedset\NodeTrait;
use App\Models\Traits\CanBeScoped;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Category\HasChildren;
use App\Models\Traits\Category\CategoryColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,PaginationTrait,CategoryColumn,HasChildren,CanBeScoped;
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted(){
        static::creating(function(Model $model){
            $model->uuid=Str::uuid();
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
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

}
