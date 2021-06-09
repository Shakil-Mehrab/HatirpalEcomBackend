<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    public static function booted(){
        static::creating(function(Contact $contact){
            $contact->uuid=Str::uuid();
        });
    }
}
