<?php

namespace App\Models\Traits\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;

trait CategoryColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Category::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Category::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','user_id','parent_id','slug','_lft','order','status','_rgt','created_at','updated_at','deleted_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Category::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','user_id','parent_id','slug','_lft','order','status','_rgt','created_at','updated_at','deleted_at']);

            })
            ->toArray();
    }
}
