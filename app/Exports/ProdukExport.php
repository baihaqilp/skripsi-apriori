<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProdukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produk::select("id","kd_produk","nama_produk","kd_kategori","harga");
    }
    /**
    * Write code on Method
    *
    * @return response()
    */
    public function headings(): array
    {
        return ["ID", "Kode Produk", "Nama Produk", "Kode Kategori", "Harga"];
    }
}
