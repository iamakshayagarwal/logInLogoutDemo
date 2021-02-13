<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'number' => $this->faker->numberBetween(500,5500),
            'country' => $this->faker->word,
            'city' => $this->faker->word,
            'address_line1' => $this->faker->word,
            'address_line2' => $this->faker->word,
            'user_id' => function(){
                return User::all()->random();
            }
        ];
    }
}
