@extends('layout.master')
<link rel="stylesheet" href="css/tambah-data.css">
@section('title','list Data Supplier')
@section('css','css/listdata.css')
@section('content')

    <div class="details">
        <div class="format-table">
            <div class="cardHeader">
                <h2>List Data Supplier</h2>
                <a class="btn" data-toggle="modal" data-target="#modal-inputsupplier">
                    <i class="fa-solid fa-plus"></i>
                    Tambah Data Supplier
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Supplier</td>
                        <td>Lokasi</td>
                        <td>Nomor Telp</td>
                        <td colspan="2">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $supplier->nama_supplier }}</td>
                        <td>{{ $supplier->lokasi_supplier }}</td>
                        <td>{{ $supplier->no_telp }}</td>
                        <td><button class="button" data-toggle="modal" data-target="#modal-edit{{ $supplier->id }}">
                            <i class="fa-solid fa-pen-to-square"  ></i>
                             Edit
                            </button>
                        </td>
                        <td><button class="button-hapus" id="hapus" onclick="konfirmasi(event, {{ $supplier->id }})"><i class="fa-solid fa-trash"></i> Hapus</button></td>
                        <?php $no++; ?>

                        {{-- Modals setelah Button Edit di klik --}}
                        <div class="modal fade" id="modal-edit{{ $supplier->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <p class="heading">Edit Data Supplier</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="input-group modal-body">
                                        <form action="/datasupplier/update/{{$supplier->id}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="input-group">
                                                <input type="hidden" name="current_route" value="/listdatasupplier">
                                                <p class="text" >Nama Supplier</p>
                                                <input class="input" type="text" value="{{ $supplier->nama_supplier }}"name="nama_supplier">
                                                <p class="text">Lokasi Supplier</p>
                                                <input class="input" type="text" value="{{ $supplier->lokasi_supplier }}" name="lokasi_supplier">
                                                <p class="text">Nomor Telpon Supplier</p>
                                                <input class="input" type="text" value="{{ $supplier->no_telp }}" name="no_telp">
                                            </div>
                                            <button class="btn-tambah" type="submit">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="modal-inputsupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="heading">Tambah Data Supplier</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <div class="input-group modal-body">
                        <form action="/datasupplier/store" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="hidden" name="current_route" value="/listdatasupplier">
                                <p class="text" >Nama Supplier</p>
                                <input class="input" type="text" placeholder="Nama Supplier..." name="nama_supplier">
                                <p class="text">Lokasi Supplier</p>
                                <input class="input" type="text" placeholder="Lokasi Supplier..." name="lokasi_supplier">
                                <p class="text">Nomor Telpon Supplier</p>
                                <input class="input" type="text" placeholder="cth : +6223923120" name="no_telp">
                            </div>
                            <button class="btn-tambah" type="submit">Tambah Data Supplier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @if(Session::has('pesan'))
        <script>
                swal("Berhasil!!", "{{ Session::get('pesan') }}", "success");
        </script>
         @endif

         <script type="text/javascript">
            function konfirmasi(event,supplier_id)
            {
                event.preventDefault();

                swal({
                title: "Yakin ingin Menghapus?",
                text: "setelah ditekan data tidak bisa dipulihkan!!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location.href = '/datasupplier/hapus/' + supplier_id;
                } else {
                    
                    swal("Data batal dihapus!!!");
                }
                });
            }        
         </script>
    <script src="../js/listdata.js"></script>
@endsection