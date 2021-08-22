<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\User\RelationWithUser;
use App\Models\Traits\Supplier\SupplierColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory, SupplierColumn, PaginationTrait, RelationWithUser;
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = time() . '-' . Str::slug(request('company_name'));
        });
    }
    public function products()
    {
        return $this->hasMany("App\Models\Product", 'user_id');
    }
    public static function statusArray()
    {
        $datas = array(
            array(
                'pending',
            ),
            array(
                'approved'
            )
        );
        return $datas;
    }
}