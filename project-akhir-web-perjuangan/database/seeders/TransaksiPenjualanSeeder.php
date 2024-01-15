<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransaksiPenjualan;

class TransaksiPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'Kasir_id' => '2',
                'sub_total' => '2000',
                'tgl_transaksi' => '2024-01-02'
            ],
            [
                'Kasir_id' => '1',
                'sub_total' => '3000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'Kasir_id' => '3',
                'sub_total' => '5000',
                'tgl_transaksi' => '2024-01-03'
            ]
        ];
        // untuk mengacak urutan data
        shuffle($data);

        // Masukkan data ke dalam tabel Transaksi Penjualan
        TransaksiPenjualan::insert($data);
    }
}

