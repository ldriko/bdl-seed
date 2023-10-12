<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailPembayaran>
 */
class DetailPembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah' => $this->faker->numberBetween(1, 8),
            'harga' => $this->faker->randomNumber(2) * 100,
            'dosis' => $this->faker->randomElement([
                '1x1',
                '2x1',
                '3x1',
                '1x2',
            ]) . ' ' . $this->faker->randomElement([
                'Kapsul',
                'Tablet',
                'Botol',
            ]) . ' ' . $this->faker->randomElement([
                'Pagi',
                'Siang',
                'Sore',
                'Malam',
            ]) . ' ' . $this->faker->randomElement([
                'Sebelum Makan',
                'Sesudah Makan',
            ]),
        ];
    }
}
