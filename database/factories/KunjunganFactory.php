<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kunjungan>
 */
class KunjunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal' => $this->faker->date(),
            'keluhan' => $this->faker->randomElement([
                'Demam',
                'Batuk',
                'Flu',
                'Sakit kepala',
                'Sakit perut',
                'Diare',
                'Sakit gigi',
                'Sakit mata',
                'Sakit telinga',
                'Sakit tenggorokan',
                'Sakit sendi',
                'Sakit punggung',
                'Sakit leher',
                'Sakit dada',
                'Sakit pinggang',
                'Sakit kaki',
                'Sakit lengan',
                'Sakit tangan',
                'Sakit kuku',
                'Sakit kulit',
                'Sakit hidung',
                'Sakit rahang',
                'Sakit bahu',
                'Sakit lutut',
                'Sakit kandung kemih',
                'Sakit hati',
                'Sakit jantung',
                'Sakit ginjal',
            ]),
        ];
    }
}
