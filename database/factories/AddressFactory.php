<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Address;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => function () {
            //     return User::all()->random()->id;
            // },
            'user_id'=>11,
            'country' => $this->faker->word,
            'division' => $this->faker->word,
            'district' => $this->faker->word,
            'delivery_place' => $this->faker->word,
            // 'slug' => Str::slug($name),
            'expense' => $this->faker->numberBetween(1000, 9000),
            'postal_code' => $this->faker->numberBetween(1000, 9000),
            'address' => $this->faker->sentence,
        ];
    }
}
