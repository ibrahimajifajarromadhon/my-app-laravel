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
            'nama' => $this->faker->sentence(mt_rand(2,5)),
            'slug' => $this->faker->slug(2),
            'harga' => $this->faker->numberBetween(100000,10000000),
            'deskripsi' => $this->faker->paragraph(mt_rand(5,10)),
            'gambar' => $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
            'category_id' => mt_rand(1,3),
            'shop_id' => mt_rand(1,3)
        ];
    }
}
