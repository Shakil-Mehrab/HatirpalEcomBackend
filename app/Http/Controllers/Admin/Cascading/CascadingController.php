<?php

namespace App\Http\Controllers\Admin\Cascading;

use App\Http\Controllers\Controller;
use App\Models\Region;

class CascadingController extends Controller
{
    public function division()
    {
        $districts = Region::where('parent_id', request('id'))->with('children')->get();
        return $districts;
    }
    public function district()
    {
        $place = Region::where('parent_id', request('id'))->with('children')->get();
        return $place;
    }
}
