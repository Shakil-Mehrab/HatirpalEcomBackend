<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ProductVariation;
use App\Models\Traits\PaginationTrait;
use App\Models\Traits\User\UserColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, PaginationTrait, UserColumn;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->uuid = Str::uuid();
            $model->slug = Str::uuid();
        });
    }
    public function scopePagination($query, $per_page)
    {
        return $query->paginate(request('per-page', 10));
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category');
    }
    public function address()
    {
        return $this->hasMany('App\Models\Address');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function cart()
    {
        return $this->belongsToMany(ProductVariation::class, 'cart_user') //first table related and 2nd tabl jar dara ai relation hoiche
            ->withPivot('quantity') //cart user theke quantity
            ->withTimestamps();
    }
}
