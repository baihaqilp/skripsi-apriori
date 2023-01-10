<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PenjualanExport;
use App\Imports\PenjualanImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Penjualan;
class PenjualanController extends Controller
{
    //
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new PenjualanExport, 'penjualan.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new PenjualanImport,request()->file('file'));
        return back();
    }
}
