<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Bag\Product\ProductStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function () {
                return User::all()->random()->id;
            },
            'name' => $name = $this->faker->sentence,
            'slug' => Str::slug($name),
            'brand' => $this->faker->word,
            'old_price' => $this->faker->numberBetween(1000, 9000),
            'sale_price' => $this->faker->numberBetween(1000, 9000),
            'minimum_order' => $this->faker->numberBetween(10, 100),
            'unit' => "piece",
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => ProductStatus::PENDING,
        ];
    }
}
