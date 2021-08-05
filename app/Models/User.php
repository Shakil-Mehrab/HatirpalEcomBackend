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
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, PaginationTrait, UserColumn, HasApiTokens;

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

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

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
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier');
    }
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
    public function cart()
    {
        return $this->belongsToMany(Product::class, 'cart_user')
            ->withPivot(['quantity', 'product_image', 'size_id', 'id'])
            ->withTimestamps();
    }
    public function cartProduct($productId, $size_id, $image)
    {
        return $this->hasOne(CartUser::class)->where('product_id', $productId)->where('size_id', $size_id)->where('product_image', $image);
    }
    public function userSpecificCart($cartId)
    {
        return $this->hasOne(CartUser::class)->where('id', $cartId)->first();
    }
    public static function statusArray()
    {
        $datas = array(
            array(
                'admin',
            ),
            array(
                'supplier'
            ),
            array(
                'user'
            )
        );
        return $datas;
    }
}
