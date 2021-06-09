<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class  PriceScope implements Scope
{

    public function apply(Builder $builder,$value){
        return  $builder->whereBetween('price',[0,$value]);
       
    }
}