<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;

class ProductManagementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */


        /** @test */
    public function list_of_products_can_be_retrieved()
    {
        $this->withoutExceptionHandling();

        Product::factory()->count(3)->make(); //data fake whit 3 register

        $response = $this->get('/products'); //called at route

        $response->assertOk();

        $products = Product::all();

        $response->assertViewIs('products.index');
        $response->assertViewHas('products', $products);
    }


    /** @test */
    public function a_product_can_be_created()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/products', [
            'name' => 'Camiseta polo',
            'value' => 21.000,
            'url_image' => 'https://static.dafiti.com.co/p/gap-1045-4423721-1-catalog-new.jpg'
        ]);

        $response->assertOk();
        $this->assertCount(1, Product::all());

        $product = Product::first();

        $this->assertEquals($product->name, 'Camiseta polo');
        $this->assertEquals($product->value, 21.000);
        $this->assertEquals($product->url_image, 'https://static.dafiti.com.co/p/gap-1045-4423721-1-catalog-new.jpg');
    }
}
