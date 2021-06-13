<?php

namespace App\Models;

use App\Models\Traits\PaginationTrait;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Slider\SliderColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory,PaginationTrait,SliderColumn;
    
   
}

