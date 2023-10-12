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
        Schema::create('detail_pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembayaran');
            $table->foreign('id_pembayaran')
                ->references('id')
                ->on('pembayaran');
            $table->unsignedBigInteger('id_stock');
            $table->foreign('id_stock')
                ->references('id')
                ->on('stock');
            $table->double('jumlah');
            $table->double('harga');
            $table->string('dosis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pembayaran');
    }
};
