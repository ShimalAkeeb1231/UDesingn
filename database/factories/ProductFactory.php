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

        

        return [
            'name' => $this->faker->name(),
            'description' => $ $this->faker->text(1,10),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'category' => $this->faker->randomElement(['t-shirt', 'shorts', 'bag', 'bottle', 'hoodie', 'hat']),
        ];
    }
}
