<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Contact\ContactColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, PaginationTrait, ContactColumn;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = time() . '-' . Str::slug(request('phone_no1'));
        });
    }
}
