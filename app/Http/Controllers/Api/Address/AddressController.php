<?php

namespace App\Http\Controllers\Api\Address;

use App\Models\Address;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Address\AddressInputRequest;
use App\Http\Resources\Address\AddressIndexResource;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }
    public function index(Request $request){
        return AddressIndexResource::collection(
           $request->user()->addresses
        //    auth()->user()->addresses
        );
    }
    public function store(AddressInputRequest $request){
        // return $request->all();
        // $address=Address::make($request->only([
        //     'name','address_1','city','postal_code','country_id'
        // ]));
        // if(!empty($request->default)){
        //     $default=$request->default;
        // }else{$default=0;}
        $address=new Address();
        $address->slug =  time() . '-' . Str::slug($request['delivery_place']);
        $address->country=$request->country;
        $address->division=$request->division;
        $address->district=$request->district;
        $address->delivery_place=$request->delivery_place;
        $address->address=$request->address;
        $address->expense=$request->expense;
        $address->postal_code=$request->postal_code;
        $address->default=true;
        $request->user()->addresses()->save($address);
        return new AddressIndexResource(
            $address
         );
    }
}
