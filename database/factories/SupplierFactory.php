<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

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
            'company_name' => $name = $this->faker->word,
            'slug' => Str::slug($name),
            'phone' => $this->faker->numberBetween(1000, 9000),
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->sentence,
            'type' => $this->faker->word,
            'country' => 'Bangladesh',
        ];
    }
}
