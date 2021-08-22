<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "name" => "Category",
            "slug" => "category",
            "children" => [
                [
                    'name' => 'Fashion',
                    'slug' => 'fashion',
                    "children" => [
                        [
                            'name' => 'Boys',
                            'slug' => 'boys',
                        ],
                        [
                            'name' => 'Girls',
                            'slug' => 'girls',
                        ],
                    ]

                ],
                [
                    'name' => 'Electronics',
                    'slug' => 'electronics',

                ]
            ]

        ];

        Category::create($categories);
    }
}