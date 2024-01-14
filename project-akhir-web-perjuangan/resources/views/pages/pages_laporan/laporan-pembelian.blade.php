@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
<link rel="stylesheet" href="css/listdata.css">

@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2>List Data Laporan Pembelian</h2>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Id Transaksi</td>
                        <td>Tanggal Transaksi</td>
                        <td>Nama Supplier</td>
                        <td>Nomor Telepon Supplier</td>
                        <td>Grand Total</td>
                        <td>Aksi</td>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @forelse ($transaksiPembelians as $key => $transaksiPembelian) 
                        <tr>
                            <td>{{ $transaksiPembelians->firstItem() + $key }}</td>
                            <td>{{ $transaksiPembelian->id }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaksiPembelian->tgl_transaksi)->locale('id_ID')->isoFormat('D MMMM Y') }}</td>
                            <td>{{ $transaksiPembelian->nama_supplier }}</td>
                            <td>{{ $transaksiPembelian->no_telp }}</td>
                            <td>Rp {{  number_format($transaksiPembelian->sub_total, 0, ',', '.')}}</td>
        
                            <td><button class="button-detail" onclick="lihatDetail('/detaillaporanPembelian/{{ $transaksiPembelian->id }}')"><i class="fa-solid fa-circle-info"></i> Lihat Detail</button></td>

                            {{-- Modals setelah Button Edit di klik --}}
                            <div class="modal fade" id="modal-edit{{ $transaksiPembelian->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="heading">Edit Data Laporan Pembelian</p>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="input-group modal-body">
                                            <form action="/dataLaporan Pembelian/update/{{ $transaksiPembelian->id }}" method="post">
                                                {{ csrf_field() }}
                                                    <p class="text">Tanggal Transaksi</p>
                                                    <input class="input" type="text" value="{{ $transaksiPembelian->tgl_transaksi }}" name="merk_Laporan Pembelian">
                                                    <input type="hidden" name="current_route" value="/listdataLaporan Pembelian">
                                                    <p class="text">Nama Supplier</p>
                                                    <input class="input" type="text" value="{{ $transaksiPembelian->nama_supplier }}" name="nama_Laporan Pembelian">
                                                    <p class="text">Grand Total Laporan Pembelian</p>
                                                    <input class="input" type="text" value="{{ number_format($transaksiPembelian->sub_total, 0, ',', '.')}}" name="Sub Total_Laporan Pembelian">

                                                    <button class="btn-tambah" type="submit">
                                                        Tambah Data Laporan Pembelian
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
    <script>
        function lihatDetail(url) {
            window.location.href = url;
        }
    </script>
        {{-- Modals Untuk Tambah Data Laporan Pembelian --}}
<!-- Modal -->

        <div class="modal fade" id="modal-inputLaporan Pembelian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content p-3 rounded-4">
                    <div class="modal-header">
                        <p class="heading">Tambah Data Laporan Pembelian</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="input-group modal-body ">
                        <form action="/dataLaporan Pembelian/store" method="post">
                            {{ csrf_field() }}
                                <input type="hidden" name="current_route" value="/listdataLaporan Pembelian">
                                <p class="text">Supplier ID</p>
                                <input class="input" type="text" placeholder="nama Laporan Pembelian..." name="nama_Laporan Pembelian">
                                <p class="text">Tanggal Transaksi</p>
                                <input class="input" type="text" placeholder="Tanggal Transaksi..." name="merk_Laporan Pembelian">
                                <p class="text">Sub Total</p>
                                <input class="input" type="text" placeholder="Sub Total..." name="Sub Total">
                                <p class="text">Stok Awal Laporan Pembelian</p>
                                <input class="input" type="text" placeholder="Stok Awal Laporan Pembelian..." name="stok">
                                <p class="text">Peringatan Stok Laporan Pembelian</p>
                                <input class="input" type="text" placeholder="Peringatan Stok Laporan Pembelian..." name="peringatan_stok">
                                <button class="btn-tambah" type="submit">
                                    Tambah Data Laporan Pembelian
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Memanggil view alert --}}
    @include('layout.alert',
        [   'is_session_pesan_exist'=>Session::has('pesan'),
            'session_pesan'=>Session::get('pesan'),
            'id' => $transaksiPembelian->id ?? '',
            'namaTable'=>'Laporan Pembelian'
        ]),
    <script src="../js/listdata.js"></script>
@endsection
