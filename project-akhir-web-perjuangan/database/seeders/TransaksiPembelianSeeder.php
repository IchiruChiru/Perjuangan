<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransaksiPembelian;
class TransaksiPembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Supplier_id' => '1', 'tgl_transaksi' => '2022-02-15', 'sub_total' => '100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2022-03-20', 'sub_total' => '200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2022-04-25', 'sub_total' => '300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2022-05-30', 'sub_total' => '400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2022-06-05', 'sub_total' => '500000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2022-07-10', 'sub_total' => '600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2022-08-15', 'sub_total' => '700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2022-09-20', 'sub_total' => '800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2022-10-25', 'sub_total' => '900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2022-11-30', 'sub_total' => '1000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2022-12-05', 'sub_total' => '1100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2023-01-10', 'sub_total' => '1200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2023-02-15', 'sub_total' => '1300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2023-03-20', 'sub_total' => '1400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2023-04-25', 'sub_total' => '1500000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2023-05-30', 'sub_total' => '1600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2023-06-05', 'sub_total' => '1700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2023-07-10', 'sub_total' => '1800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2023-08-15', 'sub_total' => '1900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2023-09-20', 'sub_total' => '2000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2023-10-25', 'sub_total' => '2100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2023-11-30', 'sub_total' => '2200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2023-12-05', 'sub_total' => '2300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2024-01-10', 'sub_total' => '2400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '2500000'],  
            ['Supplier_id' => '6', 'tgl_transaksi' => '2024-01-02', 'sub_total' => '2600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2024-01-06', 'sub_total' => '2700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2024-01-09', 'sub_total' => '2800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2024-01-12', 'sub_total' => '2900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '3000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2024-01-03', 'sub_total' => '3100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2024-01-07', 'sub_total' => '3200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2024-01-10', 'sub_total' => '3300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '3400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2024-01-02', 'sub_total' => '3500000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2024-01-06', 'sub_total' => '3600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2024-01-09', 'sub_total' => '3700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2024-01-12', 'sub_total' => '3800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '3900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2024-01-03', 'sub_total' => '4000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2024-01-07', 'sub_total' => '4100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2024-01-10', 'sub_total' => '4200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '4300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2024-01-02', 'sub_total' => '4400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2024-01-06', 'sub_total' => '4500000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2024-01-09', 'sub_total' => '4600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2024-01-12', 'sub_total' => '4700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2024-01-14', 'sub_total' => '4800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2024-01-03', 'sub_total' => '4900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2024-01-07', 'sub_total' => '5000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2024-01-03', 'sub_total' => '8100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2024-02-07', 'sub_total' => '8200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2024-03-10', 'sub_total' => '8300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2024-04-14', 'sub_total' => '8400000'],
            ['Supplier_id' => '5', 'tgl_transaksi' => '2024-05-03', 'sub_total' => '8500000'],
            ['Supplier_id' => '6', 'tgl_transaksi' => '2024-06-07', 'sub_total' => '8600000'],
            ['Supplier_id' => '7', 'tgl_transaksi' => '2024-07-10', 'sub_total' => '8700000'],
            ['Supplier_id' => '8', 'tgl_transaksi' => '2024-08-14', 'sub_total' => '8800000'],
            ['Supplier_id' => '9', 'tgl_transaksi' => '2024-09-03', 'sub_total' => '8900000'],
            ['Supplier_id' => '10', 'tgl_transaksi' => '2024-10-07', 'sub_total' => '9000000'],
            ['Supplier_id' => '1', 'tgl_transaksi' => '2024-11-10', 'sub_total' => '9100000'],
            ['Supplier_id' => '2', 'tgl_transaksi' => '2024-12-14', 'sub_total' => '9200000'],
            ['Supplier_id' => '3', 'tgl_transaksi' => '2022-01-03', 'sub_total' => '9300000'],
            ['Supplier_id' => '4', 'tgl_transaksi' => '2022-02-07', 'sub_total' => '9400000'],
        ];

        // Masukkan data ke dalam tabel Transaksi Pembelian
        TransaksiPembelian::insert($data);
    }
}


