<?php

namespace App\Exports;

use App\Models\PenjualanKategori;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenjualanKategoriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PenjualanKategori::select("id","kd_penjualan","no_faktur ","kd_kategori","Qty","tanggal_jual");
        ;
    }
    public function headings(): array
    {
        return ["ID", "Kode Penjualan", "No Faktur", "Kode Kategori", "Quantity","Tanggal Jual"];
    }
}
