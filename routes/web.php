<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

// Auth::routes();
Route::get('/', [App\Http\Controllers\Api\Product\ProductController::class, 'view']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum']], function () {
    Route::resource('/product', App\Http\Controllers\Admin\Product\ProductController::class);
    // Route::get('/status/product/{slug}', [App\Http\Controllers\Admin\Product\ProductController::class, 'status']);
    Route::resource('/category', App\Http\Controllers\Admin\Category\CategoryController::class);
    Route::resource('/user', App\Http\Controllers\Admin\User\UserController::class);
    Route::resource('/region', App\Http\Controllers\Admin\Region\RegionController::class);
    Route::resource('/contact', App\Http\Controllers\Admin\Contact\ContactController::class);
    Route::resource('/productimage', App\Http\Controllers\Admin\Productimage\ProductImageController::class);
    Route::resource('/video', App\Http\Controllers\Admin\Video\VideoController::class);
    Route::resource('/address', App\Http\Controllers\Admin\Address\AddressController::class);

    Route::get('/delete/address/{slug}', [App\Http\Controllers\Admin\Address\AddressController::class, 'delete']);
    Route::resource('/order', App\Http\Controllers\Admin\Order\OrderController::class);
    // Bulk option
    Route::post('/bulk/delete', [App\Http\Controllers\Admin\Bulk\BulkController::class, 'delete']);
    Route::delete('/delete/{slug}', [App\Http\Controllers\Admin\Variable\VariableController::class, 'destroy']);
    // Route::get('/search', [App\Http\Controllers\Admin\Variable\VariableController::class, 'search']);
    Route::get('/status/{slug}', [App\Http\Controllers\Admin\Variable\VariableController::class, 'status']);
    //checkout
    Route::get('/division', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'division']);
    Route::get('/district', [App\Http\Controllers\Admin\Cascading\CascadingController::class, 'district']);
    // shipping method
    Route::resource('/shippingmethod', App\Http\Controllers\Admin\ShippingMethod\ShippingMethodController::class);
    Route::resource('/slider', App\Http\Controllers\Admin\Slider\SliderController::class);
    Route::resource('/supplier', App\Http\Controllers\Admin\Supplier\SupplierController::class);
    Route::resource('/condition', App\Http\Controllers\Admin\Condition\ConditionController::class);
    Route::resource('/about', App\Http\Controllers\Admin\About\AboutController::class);
    Route::resource('/userprofile', App\Http\Controllers\Admin\UserProfile\UserProfileController::class);
});

require __DIR__ . '/auth.php';