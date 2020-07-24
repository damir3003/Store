<?php

use Illuminate\Database\Seeder;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $productQuantity = 10;

        factory(Product::class, $productQuantity)->create();
        // $this->call(UserSeeder::class);
    }
}
