<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\Product;
use Database\Factories\CategoryProductFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryProduct::factory(60)->create();
        Product::factory(60)->create();
    }
}
