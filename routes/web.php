<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanKategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ProdukController::class)->group(function(){
    Route::get('/produk', function () {
        $produks = DB::table('produks')
                    -> join('kategoris','produks.kd_kategori','=','kategoris.kd_kategori')
                    -> select('produks.id','produks.kd_produk','produks.nama_produk','kategoris.nama_kategori','produks.Harga')
                    ->get();
      
        return view('produk', compact('produks'));
    })->middleware(['auth', 'verified'])->name('produk');
    Route::post('produk-import','import')->name('produk.import');
    Route::get('produk-export','export')->name('produk.export');
});
Route::controller(ProdukController::class)->group(function(){
    Route::get('/penjualan', function () {
        $penjualans = DB::table('penjualans')
                    -> join('produks','penjualans.kd_barang','=','produks.kd_produk')
                    -> select('penjualans.id','penjualans.kd_penjualan','penjualans.no_faktur','produks.nama_produk','penjualans.Qty','penjualans.tanggal_jual')
                    ->get();
        $penjualankategoris = DB::table('penjualan_kategoris')
        -> join('kategoris','penjualan_kategoris.kd_kategori','=','kategoris.kd_kategori')
        -> select('penjualan_kategoris.id','penjualan_kategoris.kd_penjualan','penjualan_kategoris.no_faktur','kategoris.nama_kategori','penjualan_kategoris.tanggal_jual')
        ->get(); 
        return view('penjualan',compact('penjualans','penjualankategoris'));
    })->middleware(['auth', 'verified'])->name('penjualan');
    Route::post('penjualan-import','import')->name('penjualan.import');
    Route::get('penjualan-export','export')->name('penjualan.export');
    Route::post('penjualankategori-import','import')->name('penjualankategori.import');
    Route::get('penjualankategori-export','export')->name('penjualankategori.export');
});

Route::get('/analisa', function () {
    return view('analisa');
})->middleware(['auth', 'verified'])->name('analisa');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
