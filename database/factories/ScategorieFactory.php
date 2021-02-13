<?php

namespace Database\Factories;
use App\Models\categorie;

use App\Models\Scategorie;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Scategorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sub_cat_name' => $this->faker->word,
            'cat_id' => function(){
                return categorie::all()->random();
            }
            //'cat_id' => Scategorie::factory(),
        ];
    }
}