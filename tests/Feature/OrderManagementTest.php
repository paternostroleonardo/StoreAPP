<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Order;

class OrderManagementTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function list_of_orders_can_be_retrieved()
    {
        $this->withoutExceptionHandling();

        Order::factory()->count(3)->make(); //data fake whit 3 register

        $response = $this->get('/orders/1'); //called at route

        $response->assertOk();

        $orders = Order::all();

        $response->assertViewIs('orders.index');
        $response->assertViewHas('orders', $orders);
    }
    /** @test */
    public function a_order_can_be_created()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $response = $this->post('/orders', [
            'product_id' => $product->id,
            'uuid' => $this->faker->uuid(),
            'customer_name' => $this->faker->name(),
            'customer_email' => $this->faker->email(),
            'customer_mobile' => $this->faker->phoneNumber(),
            'status' => 1
        ]);

        $response->assertOk();
    }
}
