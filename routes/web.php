<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// Route::resource('/order', App\Http\Controllers\Api\Order\OrderController::class);


Route::get('/cart/store',[App\Http\Controllers\Api\Cart\CartController::class,'store']);  



// Route::get('/product/show/{id}', [App\Http\Controllers\Api\Product\ProductController::class, 'show']);
// Route::get('/product/variation', [App\Http\Controllers\Api\Cart\CartController::class, 'variation']);



Auth::routes();
Route::get('/', [App\Http\Controllers\Api\Product\ProductController::class, 'view']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum']], function () {
  // product 
  Route::resource('/product', App\Http\Controllers\Admin\Product\ProductController::class);
  // Route::get('/delete/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'delete']);
  Route::get('/search/product', [App\Http\Controllers\Admin\Product\ProductController::class, 'search']);
  Route::get('/status/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'status']);

  // category
  Route::resource('/category', App\Http\Controllers\Admin\Category\CategoryController::class);
  // Route::get('/delete/category/{slug}', [App\Http\Controllers\Admin\Category\CategoryController::class, 'delete']);
  Route::get('/search/category', [App\Http\Controllers\Admin\Category\CategoryController::class, 'search']);

  // user
  Route::resource('/user', App\Http\Controllers\Admin\User\UserController::class);
  // Route::get('/delete/user/{slug}', [App\Http\Controllers\Admin\User\UserController::class, 'delete']);
  Route::get('/search/user', [App\Http\Controllers\Admin\User\UserController::class, 'search']);
  // region
  Route::resource('/region', App\Http\Controllers\Admin\Region\RegionController::class);
  // Route::get('/delete/region/{slug}', [App\Http\Controllers\Admin\Region\RegionController::class, 'delete']);
  Route::get('/search/region', [App\Http\Controllers\Admin\Region\RegionController::class, 'search']);
  //  Contact
  Route::resource('/contact', App\Http\Controllers\Admin\Contact\ContactController::class);
  // Route::get('/delete/contact/{slug}', [App\Http\Admin\Controllers\Admin\Contact\ContactController::class, 'delete']);
  Route::get('/search/contact', [App\Http\Controllers\Admin\Contact\ContactController::class, 'search']);
  //  Product Image
  Route::resource('/productimage', App\Http\Controllers\Admin\Productimage\ProductImageController::class);
  // Route::get('/delete/productimage/{slug}', [App\Http\Controllers\Admin\Productimage\ProductImageController::class, 'delete']);
  // address 
  Route::resource('/address', App\Http\Controllers\Admin\Address\AddressController::class);
  Route::get('/delete/address/{slug}', [App\Http\Controllers\Admin\Address\AddressController::class, 'delete']);
  Route::get('/search/address', [App\Http\Controllers\Admin\Address\AddressController::class, 'search']);
  // order 
  Route::resource('/order', App\Http\Controllers\Admin\Order\OrderController::class);
  // Route::get('/delete/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'delete']);
  Route::get('/search/order', [App\Http\Controllers\Admin\Order\OrderController::class, 'search']);
  Route::get('/status/order/{slug}', [App\Http\Controllers\Admin\Order\OrderController::class, 'status']);

  // Bulk option 
  Route::post('/bulk/delete', [App\Http\Controllers\Admin\Bulk\BulkController::class, 'delete']);
  //checkout
  Route::get('/division', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'division']);
  Route::get('/district', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'district']);
  // shipping method 
  Route::resource('/shippingmethod', App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class);
  // Route::get('/delete/shippingmethod/{slug}', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'delete']);
  Route::get('/search/shippingmethod', [App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class, 'search']);

  // Slider
  Route::resource('/slider', App\Http\Controllers\Admin\Slider\SliderController::class);
  // Route::get('/delete/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'delete']);
  Route::get('/search/slider', [App\Http\Controllers\Admin\Slider\SliderController::class, 'search']);
  Route::get('/status/slider/{slug}', [App\Http\Controllers\Admin\Slider\SliderController::class, 'status']);
  // Supplier
  Route::resource('/supplier', App\Http\Controllers\Admin\Supplier\SupplierController::class);
  // Route::get('/delete/supplier/{slug}', [App\Http\Controllers\Admin\Supplier\SupplierController::class, 'delete']);
  Route::get('/search/supplier', [App\Http\Controllers\Admin\Supplier\SupplierController::class, 'search']);
  Route::get('/status/supplier/{slug}', [App\Http\Controllers\Admin\Supplier\SupplierController::class, 'status']);
  // Condition
  Route::resource('/condition', App\Http\Controllers\Admin\Condition\ConditionController::class);
  // Route::get('/delete/condition/{slug}', [App\Http\Controllers\Admin\Condition\ConditionController::class, 'delete']);
  Route::get('/search/condition', [App\Http\Controllers\Admin\Condition\ConditionController::class, 'search']);
  Route::get('/status/condition/{slug}', [App\Http\Controllers\Admin\Condition\ConditionController::class, 'status']);
   // About
   Route::resource('/about', App\Http\Controllers\Admin\About\AboutController::class);
  //  Route::get('/delete/about/{slug}', [App\Http\Controllers\Admin\About\AboutController::class, 'delete']);
   Route::get('/search/about', [App\Http\Controllers\Admin\About\AboutController::class, 'search']);
   Route::get('/status/about/{slug}', [App\Http\Controllers\Admin\About\AboutController::class, 'status']);
  //  UserbProfile
  Route::resource('/userprofile', App\Http\Controllers\Admin\UserProfile\UserProfileController::class);
  // Route::get('/delete/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'delete']);
  Route::get('/search/userprofile', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'search']);
  Route::get('/status/userprofile/{slug}', [App\Http\Controllers\Admin\UserProfile\UserProfileController::class, 'status']);
});
