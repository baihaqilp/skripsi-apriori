<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <form action="{{ route('penjualan.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Import Penjualan Data</button>
                </form>
    
                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            List Of penjualan by Barang
                            <a class="btn btn-danger float-end" href="{{ route('penjualan.export') }}">Export Produk Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Kode Penjualan</th>
                        <th>No Faktur</th>
                        <th>Nama Barang</th>
                        <th>Quantity</th>
                        <th>Tanggal Jual</th>
                    </tr>
                    @foreach($penjualans as $penjualan)
                    <tr>
                        <td>{{ $penjualan->id }}</td>
                        <td>{{ $penjualan->kd_penjualan }}</td>
                        <td>{{ $penjualan->no_faktur }}</td>
                        <td>{{ $penjualan->nama_produk }}</td>
                        <td>{{ $penjualan->Qty }}</td>
                        <td>{{ $penjualan->tanggal_jual}}</td>
                    </tr>
                    @endforeach
                </table>
    
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-body">
                <form action="{{ route('penjualankategori.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Import Produk Data</button>
                </form>
    
                <table class="table table-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            List Of produk By Kategoris
                            <a class="btn btn-danger float-end" href="{{ route('penjualankategori.export') }}">Export Produk Data</a>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Kode Penjualan</th>
                        <th>No Faktur</th>
                        <th>Nama Barang</th>
                        <th>Quantity</th>
                        <th>Tanggal Jual</th>
                    </tr>
                    @foreach($penjualankategoris as $penjualan)
                    <tr>
                        <td>{{ $penjualan->id }}</td>
                        <td>{{ $penjualan->kd_penjualan }}</td>
                        <td>{{ $penjualan->no_faktur }}</td>
                        <td>{{ $penjualan->nama_kategori }}</td>
                        <td>{{ $penjualan->tanggal_jual}}</td>
                    </tr>
                    @endforeach
                </table>
    
            </div>
        </div>
    </div>
</x-app-layout>
