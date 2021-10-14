<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //execute class users seeders and fakes product
        $this->call(UserSeeder::class);
        Product::factory(4)->create();
        Order::factory(2)->create();
    }
}
