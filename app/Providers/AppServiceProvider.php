<?php

namespace App\Providers;

use App\Cart\Cart;
use App\Models\Size;
use App\Models\Region;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Schema::defaultStringLength(191);
        if (Schema::hasTable('categories')) {
            View::share('categories', Category::orderBy('name', 'asc')->whereNull('parent_id')->with('children')->get());
            View::share('allcategories', Category::orderBy('name', 'asc')->with('children')->get());
            View::share('regions', Region::orderBy('name', 'asc')->get());
            View::share('sizes', Size::get());
        }
        $this->app->singleton(Cart::class, function ($app) {
            if ($app->auth->user()) {
                $app->auth->user()->load(['cart.stock']);
            }
            return new Cart($app->auth->user());
        });
    }
}