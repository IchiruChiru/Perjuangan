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
            ['Barang_id'=>'1','Transaksi_Penjualan_id'=>'1','jumlah_beli'=>'2' ],
            ['Barang_id'=>'23','Transaksi_Penjualan_id'=>'2','jumlah_beli'=>'3'],
            ['Barang_id'=>'2','Transaksi_Penjualan_id'=>'3','jumlah_beli'=>'5'],
            ['Barang_id'=>'5','Transaksi_Penjualan_id'=>'4','jumlah_beli'=>'10'],
            ['Barang_id'=>'24','Transaksi_Penjualan_id'=>'5','jumlah_beli'=>'3'],
            ['Barang_id'=>'1','Transaksi_Penjualan_id'=>'6','jumlah_beli'=>'2'],
            ['Barang_id'=>'14','Transaksi_Penjualan_id'=>'7','jumlah_beli'=>'3'],
            ['Barang_id'=>'1','Transaksi_Penjualan_id'=>'8','jumlah_beli'=>'2'],
            ['Barang_id'=>'15','Transaksi_Penjualan_id'=>'9','jumlah_beli'=>'13'],
            ['Barang_id'=>'11','Transaksi_Penjualan_id'=>'10','jumlah_beli'=>'23'],
            ['Barang_id'=>'4','Transaksi_Penjualan_id'=>'11','jumlah_beli'=>'12'],
            ['Barang_id'=>'6','Transaksi_Penjualan_id'=>'11','jumlah_beli'=>'17'],
            ['Barang_id'=>'11','Transaksi_Penjualan_id'=>'11','jumlah_beli'=>'13'],
        ];

            // untuk mengacak urutan data
            // Masukkan data ke dalam tabel DetailTransaksiPenjualan
            DetailTransaksiPenjualan::insert($data);
    }
}
