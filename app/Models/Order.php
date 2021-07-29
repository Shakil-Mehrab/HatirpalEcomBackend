<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Order\OrderColumn;
use App\Models\Traits\User\RelationWithUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, PaginationTrait, OrderColumn, RelationWithUser;
    protected $fillable = [
        "address_id",
        "shipping_method",
        "subtotal",
        "total"
    ];
    const PENDING = 'pending';
    const PROSSESING = 'processing';
    const PAYMENTA_FAILED = 'payment_failed';
    const COMPLETED = 'completed';
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function booted()
    {
        static::creating(function (Model $model) {
            $model->slug = Str::uuid();
            $model->order_id = "Hpl-" . rand(111, 99999);
            $model->status = self::PENDING;
        });
    }
    // public function getSubtotalAttribute($subtotal){
    //     return new Money($subtotal);
    // }
    public function total()
    {
        if ($this->address) {
            return $this->subtotal + $this->address->expense;
        }
        return $this->subtotal;
    }
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_order')
            ->withPivot("quantity", "size_id", "product_image")
            ->withTimestamps();
    }
}
