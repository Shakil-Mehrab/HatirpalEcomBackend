<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [App\Http\Controllers\Auth\Nuxt\LoginController::class,'login']);
    Route::post('/register', [App\Http\Controllers\Auth\Nuxt\LoginController::class,'register']);
});
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', [App\Http\Controllers\Auth\Nuxt\LoginController::class,'user']);

});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/category',[App\Http\Controllers\Api\Category\CategoryController::class, 'index']);
Route::get('/product',[App\Http\Controllers\Api\Product\ProductController::class, 'index']);
Route::get('/product/{slug}',[App\Http\Controllers\Api\Product\ProductController::class, 'show']);
Route::get('slider',[App\Http\Controllers\Api\Slider\SliderController::class, 'index']);

Route::resource('/cart','App\Http\Controllers\Api\Cart\CartController',[
    'parameters'=>[
        'cart'=>'product'
    ]
  ]);
Route::resource('/address','App\Http\Controllers\Api\Address\AddressController');  
