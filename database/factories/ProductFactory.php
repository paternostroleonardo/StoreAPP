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
         //creating data fake of table products
        return [
            'name'=>$this->faker->name(),
            'value'=>$this->faker->randomNumber(5),
            'url_image'=>$this->faker->imageUrl(1280, 720),
        ];
    }
}
