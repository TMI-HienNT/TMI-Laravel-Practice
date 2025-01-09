<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=> 'category1',
        ]);

        Category::create([
            'name'=> 'category2',
        ]);

        Category::create([
            'name'=> 'category3',
        ]);
    }
}
