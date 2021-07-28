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
        $category = [
            "name" => "Category",
            "slug" => "category",
            "children" => [
                [
                    'name' => 'Fashion',
                    'slug' => 'fashion',
                    'parent_id' => NULL,
                    "children" => [
                        [
                            'name' => 'Boys',
                            'slug' => 'boys',
                            'parent_id' => 1,
                        ],
                        [
                            'name' => 'Girls',
                            'slug' => 'girls',
                            'parent_id' => 1,
                        ],
                    ]

                ],
                [
                    'name' => 'Electronics',
                    'slug' => 'electronics',
                    'parent_id' => NULL,
                    "children" => []
                ]
            ]

        ];
        foreach ($category['children'] as $cat) {
            Category::create([
                'name' => $cat['name'],
                'slug' => $cat['slug'],
                'parent_id' => $cat['parent_id'],
                'user_id' => 1

            ]);
        }
        foreach ($category['children'] as $cat) {
            foreach ($cat['children'] as $child) {
                Category::create([
                    'name' => $child['name'],
                    'slug' => $child['slug'],
                    'parent_id' => $child['parent_id'],
                    'user_id' => 1
                ]);
            }
        }
    }
}
