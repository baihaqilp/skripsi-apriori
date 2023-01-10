<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PenjualanKategoriExport;
use App\Imports\PenjualanKategoriImport;
use App\Models\PenjualanKategori;
use Maatwebsite\Excel\Facades\Excel;
class PenjualanKategoriController extends Controller
{
    //
    public function export() 
    {
        return Excel::download(new PenjualanKategoriExport, 'produkkategori.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new PenjualankategoriImport,request()->file('file'));
        return back();
    }
}
