<?php

namespace App\Models\Traits\User;

trait RelationWithUser
{
    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }
}
