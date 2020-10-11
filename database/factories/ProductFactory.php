<?php

namespace Database\Factories;

use App\Models\Product;
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
        $faker = \Faker\Factory::create();
        $cost = $faker->randomNumber($nbDigits = 6, $strict = false);

        return [
            'name' => $faker->name,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'price_d' => (int) $cost,
            'price_s' => (string) ($cost * 100),
            'weight' => $faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 10000),
            'weight_unit' => $faker->numberBetween($min = 1, $max = 2),
            'height' => $faker->randomFloat($nbMaxDecimals = 4, $min = 1, $max = 10000),
            'height_unit' => $faker->numberBetween($min = 1, $max = 2),
            'status' => $faker->numberBetween($min = 0, $max = 1),
            'code' => $faker->uuid,
        ];
    }
}
