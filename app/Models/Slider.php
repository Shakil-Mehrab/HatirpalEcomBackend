<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Slider\SliderColumn;
use App\Models\Traits\Thumbnail\HasProfilePhoto;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory, PaginationTrait, SliderColumn, HasProfilePhoto;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = time() . '-' . Str::slug(request('heading'));
        });
    }
    public static function statusArray()
    {
        $datas = array(
            array(
                '0',
            ),
            array(
                '1'
            ),

        );
        return $datas;
    }
}