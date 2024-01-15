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
        ['Barang_id' => '1', 'Transaksi_Pembelian_id' => '1', 'jumlah_beli' => '1'],
    ['Barang_id' => '3', 'Transaksi_Pembelian_id' => '1', 'jumlah_beli' => '21'],
    ['Barang_id' => '4', 'Transaksi_Pembelian_id' => '1', 'jumlah_beli' => '32'],
    ['Barang_id' => '5', 'Transaksi_Pembelian_id' => '2', 'jumlah_beli' => '23'],
    ['Barang_id' => '6', 'Transaksi_Pembelian_id' => '2', 'jumlah_beli' => '23'],
    ['Barang_id' => '7', 'Transaksi_Pembelian_id' => '2', 'jumlah_beli' => '23'],
    ['Barang_id' => '8', 'Transaksi_Pembelian_id' => '3', 'jumlah_beli' => '11'],
    ['Barang_id' => '2', 'Transaksi_Pembelian_id' => '3', 'jumlah_beli' => '12'],
    ['Barang_id' => '9', 'Transaksi_Pembelian_id' => '3', 'jumlah_beli' => '12'],
    ['Barang_id' => '10', 'Transaksi_Pembelian_id' => '4', 'jumlah_beli' => '15'],
    ['Barang_id' => '11', 'Transaksi_Pembelian_id' => '5', 'jumlah_beli' => '10'],
    ['Barang_id' => '12', 'Transaksi_Pembelian_id' => '6', 'jumlah_beli' => '8'],
    ['Barang_id' => '13', 'Transaksi_Pembelian_id' => '7', 'jumlah_beli' => '18'],
    ['Barang_id' => '14', 'Transaksi_Pembelian_id' => '8', 'jumlah_beli' => '25'],
    ['Barang_id' => '15', 'Transaksi_Pembelian_id' => '9', 'jumlah_beli' => '20'],
    ['Barang_id' => '16', 'Transaksi_Pembelian_id' => '10', 'jumlah_beli' => '14'],
    ['Barang_id' => '17', 'Transaksi_Pembelian_id' => '11', 'jumlah_beli' => '13'],
    ['Barang_id' => '18', 'Transaksi_Pembelian_id' => '12', 'jumlah_beli' => '17'],
    ['Barang_id' => '19', 'Transaksi_Pembelian_id' => '13', 'jumlah_beli' => '22'],
    ['Barang_id' => '20', 'Transaksi_Pembelian_id' => '14', 'jumlah_beli' => '19'],
    ['Barang_id' => '21', 'Transaksi_Pembelian_id' => '15', 'jumlah_beli' => '20'],
    ['Barang_id' => '22', 'Transaksi_Pembelian_id' => '16', 'jumlah_beli' => '8'],
    ['Barang_id' => '23', 'Transaksi_Pembelian_id' => '17', 'jumlah_beli' => '9'],
    ['Barang_id' => '24', 'Transaksi_Pembelian_id' => '18', 'jumlah_beli' => '11'],
    ['Barang_id' => '25', 'Transaksi_Pembelian_id' => '19', 'jumlah_beli' => '16'],
    ['Barang_id' => '26', 'Transaksi_Pembelian_id' => '20', 'jumlah_beli' => '17'],
    ['Barang_id' => '27', 'Transaksi_Pembelian_id' => '21', 'jumlah_beli' => '18'],
    ['Barang_id' => '28', 'Transaksi_Pembelian_id' => '22', 'jumlah_beli' => '13'],
    ['Barang_id' => '29', 'Transaksi_Pembelian_id' => '23', 'jumlah_beli' => '14'],
    ['Barang_id' => '30', 'Transaksi_Pembelian_id' => '24', 'jumlah_beli' => '15'],

    ['Barang_id' => '31', 'Transaksi_Pembelian_id' => '25', 'jumlah_beli' => '12'],
    ['Barang_id' => '32', 'Transaksi_Pembelian_id' => '26', 'jumlah_beli' => '18'],
    ['Barang_id' => '33', 'Transaksi_Pembelian_id' => '27', 'jumlah_beli' => '22'],
    ['Barang_id' => '34', 'Transaksi_Pembelian_id' => '28', 'jumlah_beli' => '14'],
    ['Barang_id' => '35', 'Transaksi_Pembelian_id' => '29', 'jumlah_beli' => '16'],
    ['Barang_id' => '36', 'Transaksi_Pembelian_id' => '30', 'jumlah_beli' => '20'],
    ['Barang_id' => '37', 'Transaksi_Pembelian_id' => '31', 'jumlah_beli' => '10'],
    ['Barang_id' => '38', 'Transaksi_Pembelian_id' => '32', 'jumlah_beli' => '18'],
        ];

        // untuk mengacak urutan data
        shuffle($data);
        // Masukkan data ke dalam tabel DetailTransaksiPembelian
        DetailTransaksiPembelian::insert($data);
    }
}
