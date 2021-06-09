<?php

namespace App\Scoping\Scopes;

use App\Scoping\Contracts\Scope;
use Illuminate\Database\Eloquent\Builder;

class  SelectedCategoryScope implements Scope
{

    public function apply(Builder $builder,$value){
            $builder->whereIn('slug',explode(',',$value));
    }
}