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
        Schema::create('detail_transaksi_penjualans', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->foreignId('Barang_id')->constrained()->nullable(false);
            $table->foreignId('Transaksi_Penjualan_id')->constrained()->nullable(false);
            $table->integer('jumlah_beli')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_penjualans');
    }
};