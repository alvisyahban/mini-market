<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop ',
            'stock' => 100,
            'price' => 5000000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' => 'Handphone ',
            'stock' => 50,
            'price' => 2000000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Product::create([
            'name' => 'Tablet',
            'stock' => 30,
            'price' => 1000000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
