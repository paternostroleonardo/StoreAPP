<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
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
        $product = Product::factory()->create();
        return [
            'id'=> $this->faker->randomNumber(1),
            'product_id'=>$product->id,
            'uuid'=>$this->faker->uuid(),
            'customer_name'=>$this->faker->name(),
            'customer_email'=>$this->faker->email(),
            'customer_mobile'=>$this->faker->phoneNumber(),
            'status'=> 1
        ];
    }
}
