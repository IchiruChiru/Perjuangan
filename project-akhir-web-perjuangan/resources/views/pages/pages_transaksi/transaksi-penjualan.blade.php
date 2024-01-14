@extends('layout.master')

@section('title','transaksi Penjualan')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/transaksipenjualan/store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <select class="form-control" id="id">
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id }}" data-nama_barang="{{ $barang->nama_barang }}"
                                        data-harga_barang="{{ $barang->harga_barang }}" data-id="{{ $barang->id }}">
                                        {{ $barang->nama_barang }} (
                                        Rp.<?= number_format($barang->harga_barang) ?> )</option>
                                @endforeach
                            </select>
                            <select class="form-control" id="id_user">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" data-nama_user="{{ $user->name }}">
                                    {{ $user->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">&nbsp;</label>
                            <button class="btn btn-primary d-block" type="button" onclick="tambahItem()">Tambah Item</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Harga Barang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="transaksiItem">

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2">Jumlah</th>
                                    <th class="quantity">0</th>
                                    <th class="totalharga_barang">Rp 0</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="total_harga_barang" value="0">
                        <input type="hidden" name="User_id" id="User_id" value="">
                        <button class="btn btn-success">Simpan Transaksi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Fungsi formatRupiah untuk memformat angka ke dalam format mata uang Rupiah
        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join('');
            var ribuan = reverse.match(/\d{1,3}/g);
            var formatted = ribuan.join('.').split('').reverse().join('');
            return   formatted;
        }

        var totalharga_barang = 0;
        var quantity = 0;
        var listItem = [];
        function tambahItem() {
    updateTotalharga_barang(parseInt($('#id').find(':selected').data('harga_barang')))

    // Set the user_id value based on the selected user
    var selecteduserId = $('#id_user').find(':selected').val();
    $('#user_id').val(selecteduserId);

    var item = listItem.filter(el => el.id === $('#id').find(':selected').data('id'));
    if (item.length > 0) {
        item[0].quantity += 1
    } else {
        var item = {
            id: $('#id').find(':selected').data('id'),
            nama_barang: $('#id').find(':selected').data('nama_barang'),
            harga_barang: $('#id').find(':selected').data('harga_barang'),
            quantity: 1
        }
        listItem.push(item)
    }
    updateQuantity(1)
    updateTable()
}
        function deleteItem(index) {
            var item = listItem[index]
            if (item.quantity > 1) {
                listItem[index].quantity -= 1;
                updateTotalharga_barang(-(item.harga_barang))
                updateQuantity(-1)
            } else {
                listItem.splice(index, 1)
                updateTotalharga_barang(-(item.harga_barang * item.quantity))
                updateQuantity(-(item.quantity))
            }
            updateTable()
        }

        function updateTable() {
            var html = ''
            listItem.map((el, index) => {
                var harga_barang = formatRupiah(el.harga_barang.toString())
                var quantity = formatRupiah(el.quantity.toString())
                html += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${el.nama_barang}</td>
                    <td>${quantity}</td>
                    <td>Rp ${harga_barang}</td>
                    <td>
                        <input type="hidden" name="id[]" value="${el.id}">
                        <input type="hidden" name="quantity[]" value="${el.quantity}">
                        <button type="button" onclick="deleteItem(${index})" class="btn btn-link"><i class="fas fa-fw fa-trash text-danger"></i></button>
                    </td>
                </tr>
                `
            })
            $('.transaksiItem').html(html)
        }

        function updateTotalharga_barang(nom) {
            totalharga_barang = totalharga_barang + nom;
            $('[name=total_harga_barang]').val(totalharga_barang)
            $('.totalharga_barang').html(formatRupiah(totalharga_barang.toString()))
        }

        function updateQuantity(nom) {
            quantity = quantity + nom;
            $('.quantity').html(formatRupiah(quantity.toString()))
        }

        function emptyTable() {
            $('.transaksiItem').html(`
                <tr>
                    <td colspan="4">Belum ada item, silahkan tambahkan</td>
                </tr>
            `)
        }

        $(document).ready(function() {
            emptyTable()
        })
    </script>
@endsection