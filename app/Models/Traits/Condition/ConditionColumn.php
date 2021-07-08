<?php

namespace App\Models\Traits\Condition;

use App\Models\Contact;
use App\Models\Condition;
use Illuminate\Support\Facades\Schema;

trait ConditionColumn
{
 public static function columns()
  {
    return collect(Schema::getColumnListing(Condition::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['created_at', 'updated_at',]);
      })
      ->toArray();
  }
  public static function create_columns()
  {
    return collect(Schema::getColumnListing(Condition::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','slug','user_id','short_description','description','status', 'created_at', 'updated_at']);
      })
      ->toArray();
  }
  public static function edit_columns()
  {
    return collect(Schema::getColumnListing(Condition::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','status','slug','user_id','short_description','description', 'created_at', 'updated_at']);
      })
      ->toArray();
    // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
    // return $collection;
  }
}