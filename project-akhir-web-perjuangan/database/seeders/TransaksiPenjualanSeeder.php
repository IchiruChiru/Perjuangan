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
                'User_id' => '2',
                'sub_total' => '60000000',
                'tgl_transaksi' => '2024-01-02'
            ],
            [
                'User_id' => '2',
                'sub_total' => '45000000',
                'tgl_transaksi' => '2024-01-12'
            ],
            [
                'User_id' => '3',
                'sub_total' => '320000000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'User_id' => '2',
                'sub_total' => '9000000',
                'tgl_transaksi' => '2024-01-02'
            ],
            [
                'User_id' => '2',
                'sub_total' => '45000000',
                'tgl_transaksi' => '2024-01-14'
            ],
            [
                'User_id' => '3',
                'sub_total' => '60000000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'User_id' => '3',
                'sub_total' => '39000000',
                'tgl_transaksi' => '2024-01-01'
            ],
            [
                'User_id' => '2',
                'sub_total' => '5000000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'User_id' => '2',
                'sub_total' => '19500000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'User_id' => '3',
                'sub_total' => '9000000',
                'tgl_transaksi' => '2024-01-03'
            ],
            [
                'User_id' => '2',
                'sub_total' => '178600000',
                'tgl_transaksi' => '2024-01-15'
            ],
        ];
     

        // Masukkan data ke dalam tabel Transaksi Penjualan
        TransaksiPenjualan::insert($data);
    }
}


