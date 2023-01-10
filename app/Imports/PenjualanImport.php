<?php

namespace App\Imports;

use App\Models\Penjualan;
use Maatwebsite\Excel\Concerns\ToModel;

class PenjualanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penjualan([
            //
            'kd_penjualan' => $row['kd_penjualan'],
            'no_faktur' => $row['no_faktur'],
            'kd_barang' => $row['kd_barang'],
            'Qty' => $row['qty'],
            'tanggal_jual' => $row['tanggal_jual'],        
        ]);
    }
}
