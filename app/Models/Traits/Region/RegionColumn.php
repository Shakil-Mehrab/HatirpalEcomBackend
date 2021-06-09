<?php

namespace App\Models\Traits\Region;

use App\Models\Region;
use Illuminate\Support\Facades\Schema;

trait RegionColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Region::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['deleted_at','updated_at','created_at','uuid','_lft','_rgt','lng','lat']);

            })
            ->toArray();           
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Region::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','parent_id','slug','eng_name','order','_lft','_rgt','lng','lat','created_at','updated_at']);

            })
            ->toArray();     
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Region::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','parent_id','slug','eng_name','order','_lft','_rgt','lng','lat','created_at','updated_at']);

            })
            ->toArray();     
        // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
        // return $collection;
    }
}
