<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('product_category')->insert([
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'category_id' => Category::inRandomOrder()->first()->id,
            ],
        ]);
    }
    
}
