<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Produk([
            //
            'kd_produk' => $row['kd_produk'],
            'nama_produk' => $row['nama_produk'],
            'kd_kategori' => $row['kd_kategori'],
            'harga' => $row['Harga']
        ]);
    }
}
