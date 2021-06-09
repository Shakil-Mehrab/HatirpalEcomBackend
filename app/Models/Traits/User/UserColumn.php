<?php

namespace App\Models\Traits\User;

use App\Models\User;
use Illuminate\Support\Facades\Schema;

trait UserColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(User::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['email_verified_at','remember_token','updated_at','created_at','password',]);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(User::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','email_verified_at','thumbnail','remember_token','password','slug','updated_at','created_at']);

            })
            ->toArray();     
        // $collection=collect(['name','brand','price','short_description','description','thumbnail']);
        // return $collection;

    }
}
