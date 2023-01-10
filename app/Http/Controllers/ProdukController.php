<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\ProdukExport;
use App\Imports\ProdukImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Produk;

class ProdukController extends Controller
{
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ProdukExport, 'produk.xlsx');
    }
       
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ProdukImport,request()->file('file'));
        return back();
    }
    
}
