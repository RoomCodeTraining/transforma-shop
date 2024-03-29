<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        $name = $this->faker->name;
        return [
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'on_stock' => $this->faker->boolean,
            'image' => "products/one.jpg",
            "category_id" => \App\Models\Category::first()->id,
        ];
    }
}