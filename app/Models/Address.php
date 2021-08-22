<?php

namespace App\Models;

use App\Models\Region;
use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Address\AddressColumn;
use App\Models\Traits\User\RelationWithUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory, PaginationTrait, AddressColumn, RelationWithUser;
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = time() . '-' . Str::slug(request('address'));
        });
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category')
            ->withTimestamps();
    }
    public function country()
    {
        return $this->belongsTo(Region::class);
    }
    public function division()
    {
        return $this->belongsTo(Region::class);
    }
    public function district()
    {
        return $this->belongsTo(Region::class);
    }
    public function place()
    {
        return $this->belongsTo(Region::class);
    }
}