<?php

namespace App\Http\Controllers\Auth\Nuxt;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Resources\User\LoginUserResource;

class LoginController extends Controller
{
    public function action(Request $request){
        if(!$token = auth()->attempt($request->only(['email','password']))){
            return response()->json([
                'errors'=>[
                    'loginerror'=>'These credentials do not match our records.'
                ]
                ],422);
        }
        return (new LoginUserResource($request->user()))
        ->additional([
            "meta"=>[
                "token"=>$token
            ]
        ]);
    }
}
