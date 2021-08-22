<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Video\VideoColumn;
use App\Models\Traits\User\RelationWithUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory, VideoColumn, PaginationTrait, RelationWithUser;

    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = time() . '-' . Str::slug(request('name'));
        });
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}