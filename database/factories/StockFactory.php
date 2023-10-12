<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_obat' => $this->faker->medicine,
            'jenis' => $this->faker->randomElement(['Tablet', 'Kapsul', 'Sirup', 'Salep']),
            'expired' => $this->faker->dateTimeBetween('now', '+1 years'),
            'harga' => $this->faker->randomFloat(0, 1000, 100000),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}
