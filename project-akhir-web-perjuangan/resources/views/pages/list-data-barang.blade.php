@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data barang')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>List Data Barang</h2>
                <a class="btn" data-toggle="modal" data-target="#modal-inputbarang">
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
        
        {{-- Modals Untuk Tambah Data Barang --}}       
<!-- Modal -->

        <div class="modal fade" id="modal-inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading">Tambah Data Barang</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="input-group modal-body">
                        <form action="/databarang/store" method="post">
                            {{ csrf_field() }}
                                <input type="hidden" name="current_route" value="/listdatabarang">
                                <p class="text">Nama Barang</p>
                                <input class="input" type="text" placeholder="nama barang..." name="nama_barang">
                                <p class="text">Merk Barang</p>
                                <input class="input" type="text" placeholder="merk barang..." name="merk_barang">
                                <p class="text">Harga Barang</p>
                                <input class="input" type="text" placeholder="harga barang..." name="harga_barang">
                                <p class="text">Stok Awal Barang</p>
                                <input class="input" type="text" placeholder="Stok Awal barang..." name="stok">
                                <button class="btn-tambah" type="submit">
                                    Tambah Data Barang
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/listdata.js"></script>
@endsection