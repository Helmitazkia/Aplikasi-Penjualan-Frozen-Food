<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'         => $faker->firsNameMale,
        'price'        => $faker->numberBetweeen(100000,100000),
        'desc'         => $faker->paragraph($nbsentences=3 , $variableNbsentence),
        'image'        => $faker->firsNameMale,
        ];
    }
}
