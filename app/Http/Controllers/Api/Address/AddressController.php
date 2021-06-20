<?php

namespace App\Http\Controllers\Api\Address;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Address\AddressIndexResource;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
    public function index(Request $request){
        // return $request->user;
        return AddressIndexResource::collection(
           $request->user()->addresses
        );
    }
}
