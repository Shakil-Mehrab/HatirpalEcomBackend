<?php

namespace App\Models\Traits\Supplier;

use App\Models\Supplier;
use Illuminate\Support\Facades\Schema;

trait SupplierColumn
{
  public static function columns()
  {
    return collect(Schema::getColumnListing(Supplier::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['created_at', 'updated_at',]);
      })
      ->toArray();
  }
  public static function create_columns()
  {
    return collect(Schema::getColumnListing(Supplier::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id', 'slug', 'user_id', 'thumbnail', 'thumbnail1', 'thumbnail2', 'thumbnail3', 'thumbnail4', 'thumbnail5', 'status', 'description', 'deleted_at', 'created_at', 'updated_at']);
      })
      ->toArray();
  }
  public static function edit_columns()
  {
    return collect(Schema::getColumnListing(Supplier::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id', 'status', 'slug', 'user_id', 'thumbnail', 'thumbnail2', 'thumbnail3', 'thumbnail4', 'thumbnail5', 'description', 'created_at', 'updated_at']);
      })
      ->toArray();
    // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
    // return $collection;
  }
}
