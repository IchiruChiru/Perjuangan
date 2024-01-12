@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data Laporan Penjualan')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2>List Data Laporan Penjualan</h2>
                <a class="btn" data-toggle="modal" data-target="#modal-inputLaporan Penjualan">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Laporan Penjualan
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td> ID</td>
                        <td>Sub Total</td>
                        <td>Tanggal Transaksi</td>
                        <td>Stok</td>
                        <td>Ketersediaan</td>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($transaksiPenjualans as $transaksiPenjualan)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $transaksiPenjualan->Kasir_id }}</td>
                            <td>{{ $transaksiPenjualan->sub_total }}</td>
                            <td>{{$transaksiPenjualan->tgl_transaksi }}</td>
                            <td><button class="button"  data-toggle="modal" data-target="#modal-edit{{ $transaksiPenjualan->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit</button></td>
                            <td><button class="button-hapus" onclick="konfirmasi(event, {{ $transaksiPenjualan->id }})"><i class="fa-solid fa-trash"></i> Hapus</button></td>

                            {{-- Modals setelah Button Edit di klik --}}
                            <div class="modal fade" id="modal-edit{{ $transaksiPenjualan->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="heading">Edit Data Laporan Penjualan</p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="input-group modal-body">
                                            <form action="/databarang/update/{{ $transaksiPenjualan->id }}" method="post">
                                                {{ csrf_field() }}
                                                    <input type="hidden" name="current_route" value="/listdatabarang">
                                                    <p class="text">Kasir ID</p>
                                                    <input class="input" type="text" value="{{ $transaksiPenjualan->Kasir_id }}" name="nama_barang">
                                                    <p class="text">Sub Total</p>
                                                    <input class="input" type="text" value="{{ $transaksiPenjualan->sub_total }}" name="merk_barang">
                                                    <p class="text">Tanggal Transaksi Barang</p>
                                                    <input class="input" type="text" value="{{ $transaksiPenjualan->tgl_transaksi }}" name="Tanggal Transaksi_barang">
                                                    <button class="btn-tambah" type="submit">
                                                        Tambah Data Laporan Penjualan
                                                    </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @php
                            $no++;
                        @endphp


                    @endforeach
                </tbody>
            </table>
    </div>

        {{-- Modals Untuk Tambah Data Barang --}}
<!-- Modal -->

        <div class="modal fade" id="modal-inputbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-3 rounded-4">
                    <div class="modal-header">
                        <p class="heading">Tambah Data Laporan Penjualan</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="input-group modal-body ">
                        <form action="/databarang/store" method="post">
                            {{ csrf_field() }}
                                <input type="hidden" name="current_route" value="/listdatabarang">
                                <p class="text">Kasir ID</p>
                                <input class="input" type="text" placeholder="Kasir ID..." name="Kasir_id">
                                <p class="text">Sub Total</p>
                                <input class="input" type="text" placeholder="Sub Total..." name="sub_total">
                                <p class="text">Tanggal Transaksi</p>
                                <input class="input" type="text" placeholder="Tanggal Transaksi barang..." name="tgl_transaksi">
                                <p class="text">Stok Awal</p>
                                <input class="input" type="text" placeholder="Stok Awal barang..." name="stok">
                                <p class="text">Peringatan Stok</p>
                                <input class="input" type="text" placeholder="Peringatan Stok barang..." name="peringatan_stok">
                                <button class="btn-tambah" type="submit">
                                    Tambah Data Laporan Penjualan
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Memanggil view alert
    @include('layout.alert',
        [   'is_session_pesan_exist'=>Session::has('pesan'),
            'session_pesan'=>Session::get('pesan'),
            'id' => $transaksiPenjualan->id ?? '',
            'namaTable'=>'barang'
        ]), --}}
    <script src="../js/listdata.js"></script>
@endsection
