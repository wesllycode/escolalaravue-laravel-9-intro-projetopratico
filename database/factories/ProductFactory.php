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
    public function definition()
    {
        return [
            'table' => $this->faker->name(),
            'cover' => $this->faker->imageUrl(),
            'price' => $this->faker->randomFloat(),
            'description' => $this->faker->sentence(),
            'stock' => $this->faker->randomDigit()

        ];
    }
}
