<?php

namespace App\Http\Controllers\Auth\Nuxt;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Http\Resources\User\LoginUserResource;

class LoginController extends Controller
{
    public function login(LoginRequest $request){
        if(!$token = auth()->attempt($request->only(['email','password']))){
            return response()->json([
                'errors'=>[
                    'loginfailed'=>'These credentials do not match our records.'
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
    public function register(RegisterRequest $request){
        $user=User::create($request->only('name','email','password'));
        if(!$token = auth()->attempt($request->only(['email','password']))){
            return response()->json([
                'errors'=>[
                    'loginfailed'=>'These credentials do not match our records.'
                ]
                ],422);
        }
        return new LoginUserResource($user);
   }
}
