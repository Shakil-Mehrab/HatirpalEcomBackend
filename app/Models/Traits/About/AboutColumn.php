<?php

namespace App\Models\Traits\About;

use App\Models\About;
use Illuminate\Support\Facades\Schema;

trait AboutColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['created_at', 'updated_at',]);
            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'slug', 'user_id', 'short_description', 'thumbnail', 'thumbnail1', 'thumbnail2', 'thumbnail3', 'thumbnail4', 'status', 'description', 'deleted_at', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(About::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'status', 'slug', 'user_id', 'short_description', 'thumbnail', 'thumbnail1', 'thumbnail2', 'thumbnail3', 'thumbnail4', 'description', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
        // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
        // return $collection;
    }
}
