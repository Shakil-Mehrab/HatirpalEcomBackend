<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

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
            'slug' => Str::slug('uuid'),
            'address_id' => default(1),
            'shipping_method' => $this->faker->word,
            'payment_method_id' => '1',
            'subtotal' => $this->faker->word,
        ];
    }
}
