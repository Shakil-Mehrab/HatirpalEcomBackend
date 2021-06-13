<?php

namespace App\Models\Traits\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Schema;

trait SliderColumn
{
 public static function columns()
  {
    return collect(Schema::getColumnListing(Slider::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['created_at', 'updated_at',]);
      })
      ->toArray();
  }
  public static function create_columns()
  {
    return collect(Schema::getColumnListing(Slider::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','slug', 'thumbnail', 'status', 'deleted_at', 'created_at', 'updated_at']);
      })
      ->toArray();
  }
  public static function edit_columns()
  {
    return collect(Schema::getColumnListing(Slider::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','status','slug','thumbnail', 'created_at', 'updated_at']);
      })
      ->toArray();
    // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
    // return $collection;
  }
}