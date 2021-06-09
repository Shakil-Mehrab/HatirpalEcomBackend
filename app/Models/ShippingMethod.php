<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\ShippingMethod\ShippingMethodColumn;

class ShippingMethod extends Model
{
    use HasFactory,PaginationTrait,ShippingMethodColumn;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = Str::uuid();
        });
    }
}
