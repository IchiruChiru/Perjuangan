<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailTransaksiPembelian;

class DetailTransaksiPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =   [  
        ['Barang_id' => '1','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '1'],
        ['Barang_id' => '3','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '21'],
        ['Barang_id' => '4','Transaksi_Pembelian_id'=> '1','jumlah_beli' => '32'],
        ['Barang_id' => '5','Transaksi_Pembelian_id'=> '2','jumlah_beli' => '23'],
        ['Barang_id' => '6','Transaksi_Pembelian_id'=> '2','jumlah_beli' => '23'],
        ['Barang_id' => '7','Transaksi_Pembelian_id'=> '2','jumlah_beli' => '23'],
        ['Barang_id' => '8','Transaksi_Pembelian_id'=> '3','jumlah_beli' => '11'],
        ['Barang_id' => '2','Transaksi_Pembelian_id'=> '3','jumlah_beli' => '12'],
        ['Barang_id' => '9','Transaksi_Pembelian_id'=> '3','jumlah_beli' => '12'],
        ];

        // untuk mengacak urutan data
        shuffle($data);
        // Masukkan data ke dalam tabel DetailTransaksiPembelian
        DetailTransaksiPembelian::insert($data);
    }
}
