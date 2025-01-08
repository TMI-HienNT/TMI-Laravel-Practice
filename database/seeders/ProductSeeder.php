<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'brand_id' => 1,
            'category_id'=> 1,
        ]);

        Product::create([
            'brand_id' => 2,
            'category_id'=> 2,
        ]);

        Product::create([
            'brand_id' => 3,
            'category_id'=> 3,
        ]);
    }
}
