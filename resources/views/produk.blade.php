<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <form action="{{ route('produk.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Import Produk Data</button>
                </form>
    
                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            List Of produk
                            <a class="btn btn-danger float-end" href="{{ route('produk.export') }}">Export Produk Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                    </tr>
                    @foreach($produks as $produk)
                    <tr>
                        <td>{{ $produk->id }}</td>
                        <td>{{ $produk->kd_produk }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->nama_kategori }}</td>
                        <td>{{ $produk->Harga }}</td>
                    </tr>
                    @endforeach
                </table>
    
            </div>
        </div>
    </div>
</x-app-layout>
