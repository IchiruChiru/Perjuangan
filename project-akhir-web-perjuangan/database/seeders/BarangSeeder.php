<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Gabungan
            ['nama_barang' => 'Samsung Galaxy S21', 'merk_barang' => 'Samsung', 'harga_barang' => 2500000, 'stok' => 45, 'peringatan_stok' => 4],
            ['nama_barang' => 'Dell XPS 13', 'merk_barang' => 'Dell', 'harga_barang' => 20000000, 'stok' => 20, 'peringatan_stok' => 2],
            ['nama_barang' => 'MacBook Pro 16-inch', 'merk_barang' => 'Apple', 'harga_barang' => 32000000, 'stok' => 10, 'peringatan_stok' => 1],
            ['nama_barang' => 'Samsung Galaxy A1', 'merk_barang' => 'Samsung', 'harga_barang' => 1500000, 'stok' => 50, 'peringatan_stok' => 5],
            ['nama_barang' => 'Acer Nitro 5', 'merk_barang' => 'Acer', 'harga_barang' => 18000000, 'stok' => 22, 'peringatan_stok' => 2],
            ['nama_barang' => 'Samsung Galaxy A2', 'merk_barang' => 'Samsung', 'harga_barang' => 1800000, 'stok' => 40, 'peringatan_stok' => 4],
            ['nama_barang' => 'Lenovo Legion 5', 'merk_barang' => 'Lenovo', 'harga_barang' => 14000000, 'stok' => 28, 'peringatan_stok' => 3],
            ['nama_barang' => 'Samsung Galaxy Tab S7', 'merk_barang' => 'Samsung', 'harga_barang' => 6000000, 'stok' => 25, 'peringatan_stok' => 3],
            ['nama_barang' => 'Acer Swift 3', 'merk_barang' => 'Acer', 'harga_barang' => 8000000, 'stok' => 35, 'peringatan_stok' => 4],
            ['nama_barang' => 'Samsung Galaxy Watch 4', 'merk_barang' => 'Samsung', 'harga_barang' => 4000000, 'stok' => 30, 'peringatan_stok' => 4],
            ['nama_barang' => 'Samsung Odyssey G7 Gaming Monitor', 'merk_barang' => 'Samsung', 'harga_barang' => 10000000, 'stok' => 15, 'peringatan_stok' => 2],
            ['nama_barang' => 'Lenovo Yoga C940', 'merk_barang' => 'Lenovo', 'harga_barang' => 16000000, 'stok' => 25, 'peringatan_stok' => 3],
            ['nama_barang' => 'Samsung QLED Q90T 4K TV', 'merk_barang' => 'Samsung', 'harga_barang' => 20000000, 'stok' => 18, 'peringatan_stok' => 3],
            ['nama_barang' => 'HP Envy 14', 'merk_barang' => 'HP', 'harga_barang' => 18000000, 'stok' => 12, 'peringatan_stok' => 1],
            ['nama_barang' => 'Advan i5C Duo', 'merk_barang' => 'Advan', 'harga_barang' => 1500000, 'stok' => 50, 'peringatan_stok' => 4],
            ['nama_barang' => 'Samsung T5 Portable SSD', 'merk_barang' => 'Samsung', 'harga_barang' => 1500000, 'stok' => 40, 'peringatan_stok' => 5],
            ['nama_barang' => 'Advan G2', 'merk_barang' => 'Advan', 'harga_barang' => 2000000, 'stok' => 60, 'peringatan_stok' => 6],
            ['nama_barang' => 'Samsung Galaxy Buds Pro', 'merk_barang' => 'Samsung', 'harga_barang' => 2500000, 'stok' => 22, 'peringatan_stok' => 2],
            ['nama_barang' => 'HP Spectre x360', 'merk_barang' => 'HP', 'harga_barang' => 25000000, 'stok' => 12, 'peringatan_stok' => 1],
            ['nama_barang' => 'Samsung Galaxy Note 20', 'merk_barang' => 'Samsung', 'harga_barang' => 3000000, 'stok' => 38, 'peringatan_stok' => 3],
            
            // Dell
            ['nama_barang' => 'Dell Alienware M15', 'merk_barang' => 'Dell', 'harga_barang' => 35000000, 'stok' => 15, 'peringatan_stok' => 1],
            ['nama_barang' => 'Dell XPS 13', 'merk_barang' => 'Dell', 'harga_barang' => 20000000, 'stok' => 20, 'peringatan_stok' => 2],
            ['nama_barang' => 'Dell Inspiron 15', 'merk_barang' => 'Dell', 'harga_barang' => 15000000, 'stok' => 28, 'peringatan_stok' => 3],
            
            // Lenovo
            ['nama_barang' => 'Lenovo ThinkPad X1 Carbon', 'merk_barang' => 'Lenovo', 'harga_barang' => 18000000, 'stok' => 25, 'peringatan_stok' => 5],
            ['nama_barang' => 'Lenovo ThinkPad X1 Carbon', 'merk_barang' => 'Lenovo', 'harga_barang' => 18000000, 'stok' => 32, 'peringatan_stok' => 4],
            ['nama_barang' => 'Lenovo Yoga C940', 'merk_barang' => 'Lenovo', 'harga_barang' => 16000000, 'stok' => 35, 'peringatan_stok' => 3],
            
            // Apple
            ['nama_barang' => 'Apple Watch Series 7', 'merk_barang' => 'Apple', 'harga_barang' => 5000000, 'stok' => 20, 'peringatan_stok' => 2],
            ['nama_barang' => 'AirPods Pro', 'merk_barang' => 'Apple', 'harga_barang' => 2500000, 'stok' => 30, 'peringatan_stok' => 5],
            ['nama_barang' => 'iPhone 13 Pro', 'merk_barang' => 'Apple', 'harga_barang' => 28000000, 'stok' => 15, 'peringatan_stok' => 2],
            ['nama_barang' => 'iPhone 13 Pro', 'merk_barang' => 'Apple', 'harga_barang' => 25000000, 'stok' => 15, 'peringatan_stok' => 3],
            ['nama_barang' => 'MacBook Pro 16-inch', 'merk_barang' => 'Apple', 'harga_barang' => 30000000, 'stok' => 10, 'peringatan_stok' => 2],
            
            // Acer
            ['nama_barang' => 'Acer Predator Helios 300', 'merk_barang' => 'Acer', 'harga_barang' => 23000000, 'stok' => 18, 'peringatan_stok' => 2],
            ['nama_barang' => 'Acer Predator Helios 300', 'merk_barang' => 'Acer', 'harga_barang' => 17000000, 'stok' => 30, 'peringatan_stok' => 4],
            ['nama_barang' => 'Acer Swift 3', 'merk_barang' => 'Acer', 'harga_barang' => 12000000, 'stok' => 40, 'peringatan_stok' => 5],
            
            // Advan
            ['nama_barang' => 'Advan i7', 'merk_barang' => 'Advan', 'harga_barang' => 2500000, 'stok' => 50, 'peringatan_stok' => 4],
            ['nama_barang' => 'Advan G2', 'merk_barang' => 'Advan', 'harga_barang' => 3000000, 'stok' => 45, 'peringatan_stok' => 3],
            ['nama_barang' => 'Advan i5C Duo', 'merk_barang' => 'Advan', 'harga_barang' => 1200000, 'stok' => 55, 'peringatan_stok' => 5],
            
            
            // HP
            ['nama_barang' => 'HP Spectre x360', 'merk_barang' => 'HP', 'harga_barang' => 23000000, 'stok' => 18, 'peringatan_stok' => 2],
            ['nama_barang' => 'HP Pavilion Gaming Laptop', 'merk_barang' => 'HP', 'harga_barang' => 16000000, 'stok' => 25, 'peringatan_stok' => 3],
            ['nama_barang' => 'HP Pavilion Gaming Laptop', 'merk_barang' => 'HP', 'harga_barang' => 17000000, 'stok' => 20, 'peringatan_stok' => 3],
            ['nama_barang' => 'HP Envy 14', 'merk_barang' => 'HP', 'harga_barang' => 18000000, 'stok' => 15, 'peringatan_stok' => 2],

        ];

        // untuk mengacak urutan data
        // Masukkan data ke dalam tabel Barang
        Barang::insert($data);
    }
}

