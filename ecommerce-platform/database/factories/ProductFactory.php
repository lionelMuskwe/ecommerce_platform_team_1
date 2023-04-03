<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;


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
    public function definition()
    {
        return [
            'isbn' => fake()->isbn13,
            'title' => fake()->name(),
            'price' => fake()->randomFloat(2, 1, 100),
            'description' => fake()->text(200),
            'date_published' => fake()->date('Y-m-d'),
            'publisher' => fake()->company(),
            'category_id' => fake()->numberBetween(1, 5),
            'inventory_id' => fake()->numberBetween(1, 5),
            'image' => fake()->imageUrl(640, 480, 'cats', true, 'Faker'),
            'author' => fake()->name(),
        ];
    }
}