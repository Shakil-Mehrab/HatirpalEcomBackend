<?php

namespace App\Models\Traits\ShippingMethod;

use App\Models\ShippingMethod;
use Illuminate\Support\Facades\Schema;

trait ShippingMethodColumn
{
  public static function columns()
  {
    return collect(Schema::getColumnListing(ShippingMethod::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['created_at', 'updated_at', 'deleted_at']);
      })
      ->toArray();
  }
  public static function create_columns()
  {
    return collect(Schema::getColumnListing(ShippingMethod::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id', 'uuid','slug','created_at', 'updated_at']);
      })
      ->toArray();
  }
  public static function edit_columns()
  {
    return collect(Schema::getColumnListing(ShippingMethod::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id', 'uuid','slug','created_at', 'updated_at']);
      })
      ->toArray();
    // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
    // return $collection;
  }
}
