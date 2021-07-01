<?php

namespace App\Http\Controllers\Api\ShippingMethod;

use Illuminate\Http\Request;
use App\Models\ShippingMethod;
use App\Http\Controllers\Controller;
use App\Http\Resources\ShippingMethod\ShippingMethodResource;

class ShippingMethodController extends Controller
{
    public function index(){
        $shipping=ShippingMethod::orderBy('name','asc')->get();
        return ShippingMethodResource::collection($shipping);
    }
}
