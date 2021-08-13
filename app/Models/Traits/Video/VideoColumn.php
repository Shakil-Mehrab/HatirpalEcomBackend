<?php

namespace App\Models\Traits\Video;

use App\Models\Video;
use Illuminate\Support\Facades\Schema;

trait VideoColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Video::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['deleted_at', 'updated_at', 'created_at', '_rgt', 'lng', 'lat']);
            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Video::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'product_id', 'size', 'slug', 'user_id', 'video', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Video::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'product_id', 'size', 'slug', 'user_id', 'video', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
        // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
        // return $collection;
    }
}
