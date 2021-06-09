<?php

namespace App\Models\Traits\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Schema;

trait OrderColumn
{
    public static function columns()
    {
        return collect(Schema::getColumnListing(Order::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['uuid','created_at','updated_at']);

            })
            ->toArray();
    }
    public static function create_columns()
    {
        return collect(Schema::getColumnListing(Order::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','user_id','slug','order','status','default','created_at','updated_at','deleted_at']);

            })
            ->toArray();
    }
    public static function edit_columns()
    {
        return collect(Schema::getColumnListing(Order::getQuery()->from))
            ->reject(function ($column) {
                return in_array($column,['id','uuid','user_id','slug','order','default','status','created_at','updated_at','deleted_at']);

            })
            ->toArray();
    }
}
