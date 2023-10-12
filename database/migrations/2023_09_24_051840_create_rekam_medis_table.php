<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_kunjungan');
            $table->foreign('no_kunjungan')
                ->references('no_kunjungan')
                ->on('kunjungan');
            $table->integer('nadi');
            $table->integer('suhu');
            $table->integer('pernafasan');
            $table->string('tekanan_darah');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('diagnosa_utama');
            $table->string('diagnosa_sekunder');
            $table->string('hasil_pemeriksaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
