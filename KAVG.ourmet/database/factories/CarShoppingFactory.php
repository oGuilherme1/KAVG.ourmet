<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarShopping>
 */
class CarShoppingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'products' => 1,
            'user_id' => 1,
            'quantidade' => fake()->numerify(),
            'valor' => fake()->numerify(),
        ];
    }
}
