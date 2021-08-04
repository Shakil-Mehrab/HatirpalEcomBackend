<?php

namespace App\Models\Traits\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Schema;

trait ProductColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Product::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['uuid', 'description', 'short_description', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Product::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'uuid', 'vat', 'waranty', 'rating', 'unit', 'discount', 'slug', 'user_id', 'description', 'short_description', 'thumbnail', 'top', 'order', 'status', 'viewer', 'deleted_at', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Product::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column, ['id', 'uuid', 'vat', 'waranty', 'rating', 'unit', 'user_id', 'discount', 'description', 'short_description', 'thumbnail', 'slug', 'top', 'order', 'status', 'viewer', 'deleted_at', 'created_at', 'updated_at', 'deleted_at']);
            })
            ->toArray();
        // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
        // return $collection;
    }
}
