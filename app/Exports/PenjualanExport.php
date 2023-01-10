<?php

namespace App\Exports;

use App\Models\Penjualan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenjualanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penjualan::select("id","kd_penjualan","no_faktur ","kd_barang","Qty","tanggal_jual");
    }

    public function headings(): array
    {
        return ["ID", "Kode Penjualan", "No Faktur", "Kode Barang", "Quantity","Tanggal Jual"];
    }
}
