<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size')->insert([
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
            [
                'product_id' => Product::inRandomOrder()->first()->id,
                'size_id' => Size::inRandomOrder()->first()->id,
            ],
        ]);
    }
    
}