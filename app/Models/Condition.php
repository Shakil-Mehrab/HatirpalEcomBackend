<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Condition\ConditionColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Condition extends Model
{
    use HasFactory, PaginationTrait, ConditionColumn;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = Str::uuid();
        });
    }
}
