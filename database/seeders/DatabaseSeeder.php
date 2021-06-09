<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\RegionSeeder;
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
        \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(20)->create();
        \App\Models\Product::factory(100)->create();
        $this->call(ProductCategorySeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ProductSizeSeeder::class);
        $this->call(ShippingMethodSeeder::class);
        $this->call(RegionSeeder::class);
    }
}
