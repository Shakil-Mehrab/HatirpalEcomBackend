<?php

namespace App\Models\Traits\Contact;

use App\Models\Contact;
use Illuminate\Support\Facades\Schema;

trait ContactColumn
{
 public static function columns()
  {
    return collect(Schema::getColumnListing(Contact::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['created_at', 'updated_at',]);
      })
      ->toArray();
  }
  public static function create_columns()
  {
    return collect(Schema::getColumnListing(Contact::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','slug','user_id','status','description', 'created_at', 'updated_at']);
      })
      ->toArray();
  }
  public static function edit_columns()
  {
    return collect(Schema::getColumnListing(Contact::getQuery()->from))
      ->reject(function ($column) {
        return in_array($column, ['id','status','slug','user_id','description', 'created_at', 'updated_at']);
      })
      ->toArray();
    // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
    // return $collection;
  }
}