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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->unsignedBigInteger('no_kunjungan')
                ->autoIncrement();
            $table->string('sip_dokter', 20);
            $table->foreign('sip_dokter')
                ->references('sip')
                ->on('dokter');
            $table->unsignedBigInteger('id_pasien');
            $table->foreign('id_pasien')
                ->references('id')
                ->on('pasien');
            $table->date('tanggal');
            $table->text('keluhan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
