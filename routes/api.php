<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category',[App\Http\Controllers\Api\Category\CategoryController::class, 'index']);
Route::get('/product',[App\Http\Controllers\Api\Product\ProductController::class, 'index']);
Route::get('/product/{slug}',[App\Http\Controllers\Api\Product\ProductController::class, 'show']);
// Route::post('login',[App\Http\Controllers\Api\Category\CategoryController::class, 'action']);
Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [App\Http\Controllers\Auth\Nuxt\LoginController::class,'action']);
    Route::post('/register', [App\Http\Controllers\Auth\Nuxt\RegisterController::class,'register']);
    Route::post('/user', [App\Http\Controllers\Auth\Nuxt\RegisterController::class,'user']);
});