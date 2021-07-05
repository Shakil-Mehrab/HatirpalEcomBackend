<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\About\AboutColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory,PaginationTrait,AboutColumn;
}
