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
        Schema::create('transaksi_pembelians', function (Blueprint $table) {
            $table->id()->primaryKey();
            $table->foreignId('Supplier_id')->constrained();
            $table->date('tgl_transaksi')->nullable(false);
            $table->integer('sub_total',false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_pembelians');
    }
};