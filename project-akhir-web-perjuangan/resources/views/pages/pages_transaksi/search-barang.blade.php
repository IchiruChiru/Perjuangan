<div>
    <ul>
        @foreach($products as $product)
            <li wire:click="selectProduct('{{ $product->nama_barang }}', '{{ $product->merk_barang }}', {{ $product->harga_barang }}, {{ $product->stok }})">
                {{ $product->nama_barang }} - {{ $product->merk_barang }}
            </li>
        @endforeach
    </ul>
</div>