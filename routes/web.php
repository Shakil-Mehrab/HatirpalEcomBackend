<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::post('/update',[App\Http\Controllers\Api\Cart\CartController::class,'update']);



// Route::resource('/api/cart','App\Http\Controllers\Api\Cart\CartController',[
//   'parameters'=>[
//       'cart'=>'productVariation'
//   ]
// ]);

// Route::get('/cart',[App\Http\Controllers\Api\Cart\CartController::class, 'update']);
 


Route::get('/',[App\Http\Controllers\Api\Product\ProductController::class, 'view']);
Route::get('/product/show/{id}',[App\Http\Controllers\Api\Product\ProductController::class, 'show']);


Route::get('/product/variation',[App\Http\Controllers\Api\Cart\CartController::class, 'variation']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum']], function () {
  // product 
  Route::get('/view/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'view']);
  Route::get('/create/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'create']);
  Route::post('/store/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'store']);
  Route::get('/delete/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'delete']);
  Route::get('/edit/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'edit']);
  Route::post('/update/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'update']);
  Route::get('/search/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'search']);
  Route::get('/status/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'status']);

  // category
  Route::get('/view/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'view']);
  Route::get('/create/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'create']);
  Route::post('/store/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'store']);
  Route::get('/delete/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'delete']);
  Route::get('/edit/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'edit']);
  Route::post('/update/category/{id}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'update']);
  Route::get('/search/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'search']);

  // user
  Route::get('/view/user', [App\Http\Controllers\Admin\User\UserController::class, 'view']);
  Route::get('/delete/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'delete']);
  Route::get('/edit/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'edit']);
  Route::post('/update/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'update']);
  Route::get('/search/user', [App\Http\Controllers\Admin\User\UserController::class, 'search']);
  // region
  Route::get('/view/region', [App\Http\Controllers\Admin\Region\RegionController::class, 'view']);
  Route::get('/create/region', [App\Http\Controllers\Admin\Region\RegionController::class, 'create']);
  Route::post('/store/region', [App\Http\Controllers\Admin\Region\RegionController::class, 'store']);
  Route::get('/delete/region/{slug}', [App\Http\Controllers\Admin\Region\RegionController::class, 'delete']);
  Route::get('/edit/region/{slug}', [App\Http\Controllers\Admin\Region\RegionController::class, 'edit']);
  Route::post('/update/region/{slug}', [App\Http\Controllers\Admin\Region\RegionController::class, 'update']);
  Route::get('/search/region', [App\Http\Controllers\Admin\Region\RegionController::class, 'search']);
  //  Contact
  Route::get('/create/contact', [App\Http\Controllers\contact\ContactController::class, 'add']);
  Route::get('/view/contact', [App\Http\Controllers\Contact\ContactController::class, 'view']);
  Route::post('/store/contact', [App\Http\Controllers\Contact\ContactController::class, 'store']);
  Route::get('/edit/contact/{slug}', [App\Http\Controllers\Contact\ContactController::class, 'edit']);
  Route::post('/update/contact/{slug}', [App\Http\Controllers\Contact\ContactController::class, 'update']);
  //  Product Image
  Route::get('/view/productimage', [App\Http\Controllers\Admin\Productimage\ProductImageController::class, 'view']);
  Route::get('/delete/productimage/{slug}', [App\Http\Controllers\Admin\Productimage\ProductImageController::class, 'delete']);
  // address 
  Route::get('/view/address', [App\Http\Controllers\Admin\Address\AddressController::class, 'view']);
  Route::get('/create/address', [App\Http\Controllers\Admin\Address\AddressController::class, 'create']);
  Route::post('/store/address', [App\Http\Controllers\Admin\Address\AddressController::class, 'store']);
  Route::get('/delete/address/{slug}', [App\Http\Controllers\Admin\Address\AddressController::class, 'delete']);
  Route::get('/edit/address/{slug}', [App\Http\Controllers\Admin\Address\AddressController::class, 'edit']);
  Route::post('/update/address/{slug}', [App\Http\Controllers\Admin\Address\AddressController::class, 'update']);
  Route::get('/search/address', [App\Http\Controllers\Admin\Address\AddressController::class, 'search']);
  // order 
  Route::get('/view/order', [App\Http\Controllers\Admin\Order\OrderController::class, 'view']);
  Route::get('/create/order', [App\Http\Controllers\Admin\Order\OrderController::class, 'create']);
  Route::post('/store/order', [App\Http\Controllers\Admin\Order\OrderController::class, 'store']);
  Route::get('/delete/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'delete']);
  Route::get('/edit/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'edit']);
  Route::post('/update/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'update']);
  Route::get('/search/order', [App\Http\Controllers\Admin\Order\OrderController::class, 'search']);
  Route::get('/status/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'status']);

// Bulk option 
Route::post('/bulk/delete', [App\Http\Controllers\Admin\Bulk\BulkController::class, 'delete']);
//checkout
Route::get('/division', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'division']);
Route::get('/district', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'district']);
  // shipping method 
  Route::get('/view/shippingmethod', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'view']);
  Route::get('/create/shippingmethod', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'create']);
  Route::post('/store/shippingmethod', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'store']);
  Route::get('/delete/shippingmethod/{slug}', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'delete']);
  Route::get('/edit/shippingmethod/{slug}', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'edit']);
  Route::post('/update/shippingmethod/{slug}', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'update']);
  Route::get('/search/shippingmethod', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'search']);

// Slider
Route::get('/view/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'view']);
Route::get('/create/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'create']);
Route::post('/store/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'store']);
Route::get('/delete/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'delete']);
Route::get('/edit/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'edit']);
Route::post('/update/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'update']);
Route::get('/search/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'search']);
Route::get('/status/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'status']);
//  UserbProfile
Route::get('/view/userprofile', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'view']);
Route::get('/create/userprofile', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'create']);
Route::post('/store/userprofile', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'store']);
Route::get('/delete/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'delete']);
Route::get('/edit/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'edit']);
Route::post('/update/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'update']);
Route::get('/search/userprofile', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'search']);
Route::get('/status/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'status']);

  });

