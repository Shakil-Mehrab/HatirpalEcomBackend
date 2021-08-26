<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\CanBeScoped;
use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Region\RegionColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;

class Region extends Model
{
    use HasFactory, PaginationTrait, RegionColumn, CanBeScoped, NodeTrait;
    protected $fillable = [
        'name',
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
            $prefix = $model->parent ? $model->parent->slug . ' ' : '';
            $model->slug = Str::slug($prefix . $model->slug);
        });
    }
}