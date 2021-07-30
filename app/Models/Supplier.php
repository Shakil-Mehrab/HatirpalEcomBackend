<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\User\RelationWithUser;
use App\Models\Traits\Supplier\SupplierColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory, SupplierColumn, PaginationTrait, RelationWithUser;
}
