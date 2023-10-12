<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DetailPembayaran;
use App\Models\Dokter;
use App\Models\Kunjungan;
use App\Models\Pasien;
use App\Models\Pembayaran;
use App\Models\RekamMedis;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $count = 500;

        User::factory()->count($count)->has(Dokter::factory()->count(1))->create();

        $doctors = Dokter::all();

        foreach ($doctors as $dokter) {
            $pasien = Pasien::factory()->create();
            $kunjungan = Kunjungan::factory()->for($dokter)->for($pasien)->create();
            RekamMedis::factory()->for($kunjungan)->create();

            $pembayaran = Pembayaran::factory()->for($kunjungan)->create();
            $stock = Stock::factory()->create();
            $detailPembayaran = DetailPembayaran::factory()->for($stock)->for($pembayaran)->count(3)->create();
        }
    }
}
