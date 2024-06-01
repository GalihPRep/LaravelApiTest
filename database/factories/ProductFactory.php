<?php

namespace Database\Factories;

use App\Models\CategoryProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = CategoryProduct::all();
        return [
            "product_category_id" => (int) rand(0, count($categories)),
            "name" => fake()->name(),
            "price" => rand(0, 1000000000000),
            'image' => Str::random(16) . "jpg",
        ];
    }
}
