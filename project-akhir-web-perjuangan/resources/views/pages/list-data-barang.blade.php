@extends('layout.master')

@section('title','list Data barang')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>List Data Barang</h2>
                <a href="{{ url('/tambahdatabarang') }}" class="btn">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Barang
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Barang</td>
                        <td>Harga</td>
                        <td>Stok</td>
                        <td>Ketersediaan</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Star Refrigerator</td>
                        <td>Rp.12.000.000</td>
                        <td>430</td>
                        <td><span class="status tersedia">Tersedia</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr><td>2</td>
                        <td >Dell Laptop</td>
                        <td>11.000.000</td>
                        <td>320</td>
                        <td><span class="status hampirhabis">Hampir Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Apple Watch</td>
                        <td>Rp.500.000</td>
                        <td>190</td>
                        <td><span class="status habis">Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Addidas Shoes</td>
                        <td>Rp.620.000</td>
                        <td>160</td>
                        <td><span class="status hampirhabis">Hampir Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Star Refrigerator</td>
                        <td>Rp.12.000.000</td>
                        <td>140</td>
                        <td><span class="status tersedia">Tersedia</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Dell Laptop</td>
                        <td>Rp.11.000.000</td>
                        <td>120</td>
                        <td><span class="status hampirhabis">Hampir Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>Apple Watch</td>
                        <td>Rp.500.000</td>
                        <td>100</td>
                        <td><span class="status habis">Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>

                    <tr>
                        <td>8</td>
                        <td>Addidas Shoes</td>
                        <td>Rp.620.000</td>
                        <td>200</td>
                        <td><span class="status habis">Habis</span></td>
                        <td><button class="button"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                        <td><button class="button-hapus"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    <script src="../js/listdata.js"></script>
@endsection