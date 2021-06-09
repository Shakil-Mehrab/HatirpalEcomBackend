<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Region\RegionColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory,PaginationTrait,RegionColumn;
    protected $fillable = [
        'name',
        'uuid',
        'slug',
        'eng_name',
        'parent_id',
        'order',
        'lat',
        'lng'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
//             $model->slug=Str::uuid();
//             $model->eng_name = $model->slug;
// 
//             $prefix = $model->parent ? $model->parent->slug . ' ' : '';
//             $model->slug = Str::slug($prefix . $model->slug);
        });
    }
   
   
   

}
