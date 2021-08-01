<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\RegionSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ShippingMethodSeeder;
use Database\Seeders\ProductCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        $this->call(CategorySeeder::class);
        \App\Models\Product::factory(5)->create();
        \App\Models\Slider::factory(5)->create();
        \App\Models\Address::factory(1)->create();
        $this->call(ProductCategorySeeder::class);
        $this->call(SizeSeeder::class);
        // $this->call(ProductSizeSeeder::class); duplicate entry problem
        $this->call(ShippingMethodSeeder::class);
        $this->call(RegionSeeder::class);
        \App\Models\Supplier::factory(1)->create();
        \App\Models\Order::factory(1)->create();
    }
}
