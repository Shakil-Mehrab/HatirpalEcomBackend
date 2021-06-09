<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class  BrandScope implements Scope
{

    public function apply(Builder $builder,$value){
        return  $builder->whereIn('brand',explode(',',$value));
       
    }
}