<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RekamMedis>
 */
class RekamMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'no_kunjungan' => KunjunganFactory::new(),
            'nadi' => $this->faker->numberBetween(70, 100),
            'suhu' => $this->faker->numberBetween(36, 39),
            'pernafasan' => $this->faker->numberBetween(12, 40),
            'tekanan_darah' => $this->faker->numberBetween(100, 140) . '/' . $this->faker->numberBetween(70, 90),
            'tinggi_badan' => $this->faker->numberBetween(150, 175),
            'berat_badan' => $this->faker->numberBetween(40, 100),
            'diagnosa_utama' => $this->faker->randomElement([
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
            'diagnosa_sekunder' => $this->faker->randomElement([
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
            'hasil_pemeriksaan' => $this->faker->randomElement([
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
