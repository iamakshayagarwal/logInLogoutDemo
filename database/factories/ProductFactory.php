<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
use App\Models\categorie;

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
            'name' => $this->faker->word,
            'description' => $this->faker->word,
            'image' => $this->faker->image('public/storage/images', 900, 400, 'cats', false),            
            'price' => $this->faker->numberBetween(1,1000),
            'stock' => $this->faker->numberBetween(0,200),
            'discount' => $this->faker->numberBetween(1,20),
            'sku_id' => $this->faker->numberBetween(1,20),
            'model' => $this->faker->numberBetween(1,20),
            'tags' => $this->faker->numberBetween(1,20),

            
             
            'subcat_id' => function(){
                return categorie::all()->random();
            }
            
           

        ];
    }
}
