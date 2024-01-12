<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailTransaksiPenjualan;

class DetailTransaksiPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =   [  
            [
                'Barang_id'=>'1',
                'Transaksi_Penjualan_id'=>'1',
                'jumlah_beli'=>'2'
            ],
            [
                'Barang_id'=>'4',
                'Transaksi_Penjualan_id'=>'2',
                'jumlah_beli'=>'3'
            ],
            [
                'Barang_id'=>'2',
                'Transaksi_Penjualan_id'=>'3',
                'jumlah_beli'=>'5'
            ]
        ];
    
            // untuk mengacak urutan data
            shuffle($data);
            // Masukkan data ke dalam tabel DetailTransaksiPenjualan
            DetailTransaksiPenjualan::insert($data);
    }
}
