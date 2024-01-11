<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BarangSeeder::class);
        $this->call(KasirSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(TransaksiPembelianSeeder::class);
        $this->call(DetailTransaksiPembelianSeeder::class);
    }
}
