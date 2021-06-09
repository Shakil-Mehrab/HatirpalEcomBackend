<?php

namespace App\Models\Traits;

use App\Scoping\Scoper;
use Illuminate\Database\Eloquent\Builder;

trait PaginationTrait
{
    public function scopePagination($query)
    {
        return $query->paginate(request('per-page',10));
    }
    public function scopeSearchPagination($query)
    {
        return $query->paginate(request('per-page',30));
    }
}
