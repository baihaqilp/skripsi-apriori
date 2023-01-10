<?php

namespace App\Imports;

use App\Models\PenjualanKategori;
use Maatwebsite\Excel\Concerns\ToModel;

class PenjualanKategoriImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PenjualanKategori([
            //
            'kd_penjualan' => $row['kd_penjualan'],
            'no_faktur' => $row['no_faktur'],
            'kd_kategori' => $row['kd_barang'],
            'Qty' => $row['qty'],
            'tanggal_jual' => $row['tanggal_jual'],
        ]);
    }
}
