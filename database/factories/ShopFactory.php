<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'nama_toko' => fake()->unique()->userName(),
            'email' => fake()->unique()->freeEmail(),
            'email_verified_at' => now(),
            'password' => fake()->password() 
        ];
    }
}
