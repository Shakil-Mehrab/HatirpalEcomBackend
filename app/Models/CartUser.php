<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartUser extends Model
{
    protected $fillable = [
        'quantity',
        'size_id',
    ];
    use HasFactory;
    protected $table = 'cart_user';
}
