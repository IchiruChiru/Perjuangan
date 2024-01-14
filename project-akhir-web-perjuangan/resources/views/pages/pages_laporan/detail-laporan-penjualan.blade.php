@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
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
                @forelse ($transaksiPenjualans as $key => $transaksiPenjualan) 
                    <tr>
                        <td>{{ $transaksiPenjualans->firstItem() + $key }}</td>
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

                        @empty
                            <tr>
                                <td class="text-center" colspan="7">Tidak ada data yang ditemukan.</td>
                            </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="url-paginasi">
                {{ $transaksiPembelians->links() }}
            </div>
            <div class="informasi-paginasi">
                <span>Menampilkan</span>
                {{ $transaksiPembelians->firstItem() }}
                <span> - </span>
                {{ $transaksiPembelians->lastItem() }}
                <span>dari</span>
                {{ $transaksiPembelians->total() }}
                <span>data</span>
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
