<?php

use App\Models\DataPegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\datapegawaicon;
use App\Http\Controllers\dataproduksicon;
use App\Http\Controllers\pemasokcon;
use App\Http\Controllers\bahanbakucon;
use App\Http\Controllers\controllerindex;
use App\Http\Controllers\stokproduksicon;
use App\Http\Controllers\datagudangcon;
use App\Http\Controllers\databarangcon;
use App\Http\Controllers\tenagakerjacon;
use App\Http\Controllers\dataoutletcon;
use App\Http\Controllers\kategoribarangcon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// index
Route::get('/', function () {
    return view('index',[
        "title" => "Dashboard"
    ]);
});

// Route::get('/dashboard', function () {
//     return view('index',[
//         "title" => "Dashboard"
//     ]);
// });

Route::get('/dashboard',[controllerindex::class, 'index'])->name('dashboard');
Route::get('/cetak_index',[controllerindex::class, 'cetak'])->name('cetak_index');

// Route::get('/view_pegawai', 'DataPegawaiController@showpegawai')->name('kepegawaian.view_pegawai');


// pegawai
Route::get('/view_pegawai',[datapegawaicon::class, 'index'])->name('view_pegawai_index');
Route::get('/create_pegawai',[datapegawaicon::class, 'create'])->name('create_pegawai');
Route::post('/insert_pegawai',[datapegawaicon::class, 'insert'])->name('insert_pegawai');

Route::get('/edit_pegawai/{id_pegawai}',[datapegawaicon::class, 'edit'])->name('edit_pegawai');
Route::post('/update_pegawai/{id_pegawai}',[datapegawaicon::class, 'update'])->name('update_pegawai');

Route::get('/delete_pegawai/{id_pegawai}',[datapegawaicon::class, 'delete'])->name('delete_pegawai');

Route::get('/cetak_pegawai',[datapegawaicon::class, 'cetak'])->name('cetak_pegawai');



// ketenagakerjaan
Route::get('/view_ketenagakerjaan',[tenagakerjacon::class, 'index'])->name('view_ketenagakerjaan_index');
Route::get('/create_ketenagakerjaan',[tenagakerjacon::class, 'create'])->name('create_ketenagakerjaan');
Route::post('/insert_ketenagakerjaan',[tenagakerjacon::class, 'insert'])->name('insert_ketenagakerjaan');

Route::get('/edit_ketenagakerjaan/{id_ketenagakerjaan}',[tenagakerjacon::class, 'edit'])->name('edit_ketenagakerjaan');
Route::post('/update_ketenagakerjaan/{id_ketenagakerjaan}',[tenagakerjacon::class, 'update'])->name('update_ketenagakerjaan');

Route::get('/delete_ketenagakerjaan/{id_ketenagakerjaan}',[tenagakerjacon::class, 'delete'])->name('delete_ketenagakerjaan');

Route::get('/cetak_ketenagakerjaan',[tenagakerjacon::class, 'cetak'])->name('cetak_ketenagakerjaan');



// pemasok
Route::get('/view_pemasok',[pemasokcon::class, 'index'])->name('view_pemasok_index');
Route::get('/create_pemasok',[pemasokcon::class, 'create'])->name('create_pemasok');
Route::post('/insert_pemasok',[pemasokcon::class, 'insert'])->name('insert_pemasok');

Route::get('/edit_pemasok/{id_pemasok}',[pemasokcon::class, 'edit'])->name('edit_pemasok');
Route::post('/update_pemasok/{id_pemasok}',[pemasokcon::class, 'update'])->name('update_pemasok');

Route::get('/delete_pemasok/{id_pemasok}',[pemasokcon::class, 'delete'])->name('delete_pemasok');

Route::get('/cetak_pemasok',[pemasokcon::class, 'cetak'])->name('cetak_pemasok');



// bahan baku
Route::get('/view_bahanbaku',[bahanbakucon::class, 'index'])->name('view_bahanbaku_index');
Route::get('/create_bahanbaku',[bahanbakucon::class, 'create'])->name('create_bahanbaku');
Route::post('/insert_bahanbaku',[bahanbakucon::class, 'insert'])->name('insert_bahanbaku');

Route::get('/edit_bahanbaku/{id_bahanbaku}',[bahanbakucon::class, 'edit'])->name('edit_bahanbaku');
Route::post('/update_bahanbaku/{id_bahanbaku}',[bahanbakucon::class, 'update'])->name('update_bahanbaku');

Route::get('/delete_bahanbaku/{id_bahanbaku}',[bahanbakucon::class, 'delete'])->name('delete_bahanbaku');

Route::get('/cetak_bahanbaku',[bahanbakucon::class, 'cetak'])->name('cetak_bahanbaku');



// data produksi
Route::get('/view_produksi',[dataproduksicon::class, 'index'])->name('view_produksi_index');
Route::get('/create_produksi',[dataproduksicon::class, 'create'])->name('create_produksi');
Route::post('/insert_produksi',[dataproduksicon::class, 'insert'])->name('insert_produksi');

Route::get('/edit_produksi/{id_produksi}',[dataproduksicon::class, 'edit'])->name('edit_produksi');
Route::post('/update_produksi/{id_produksi}',[dataproduksicon::class, 'update'])->name('update_produksi');

Route::get('/delete_produksi/{id_produksi}',[dataproduksicon::class, 'delete'])->name('delete_produksi');

Route::get('/cetak_produksi',[dataproduksicon::class, 'cetak'])->name('cetak_produksi');



// stok produksi
Route::get('/view_stokproduksi',[stokproduksicon::class, 'index'])->name('view_stokproduksi_index');
Route::get('/create_stokproduksi',[stokproduksicon::class, 'create'])->name('create_stokproduksi');
Route::post('/insert_stokproduksi',[stokproduksicon::class, 'insert'])->name('insert_stokproduksi');

Route::get('/edit_stokproduksi/{id_stok_produksi}',[stokproduksicon::class, 'edit'])->name('edit_stokproduksi');
Route::post('/update_stokproduksi/{id_stokproduksi}',[stokproduksicon::class, 'update'])->name('update_stokproduksi');

Route::get('/delete_stokproduksi/{id_stok_produksi}',[stokproduksicon::class, 'delete'])->name('delete_stokproduksi');

Route::get('/cetak_stokproduksi',[stokproduksicon::class, 'cetak'])->name('cetak_stokproduksi');




// data gudang
Route::get('/view_gudang',[datagudangcon::class, 'index'])->name('view_gudang_index');
Route::get('/create_gudang',[datagudangcon::class, 'create'])->name('create_gudang');
Route::post('/insert_gudang',[datagudangcon::class, 'insert'])->name('insert_gudang');

Route::get('/edit_gudang/{id_gudang}',[datagudangcon::class, 'edit'])->name('edit_gudang');
Route::post('/update_gudang/{id_gudang}',[datagudangcon::class, 'update'])->name('update_gudang');

Route::get('/delete_gudang/{id_gudang}',[datagudangcon::class, 'delete'])->name('delete_gudang');

Route::get('/cetak_gudang',[datagudangcon::class, 'cetak'])->name('cetak_gudang');



// data barang
Route::get('/view_databarang',[databarangcon::class, 'index'])->name('view_databarang_index');
Route::get('/create_databarang',[databarangcon::class, 'create'])->name('create_databarang');
Route::post('/insert_databarang',[databarangcon::class, 'insert'])->name('insert_databarang');

Route::get('/edit_databarang/{id_data_barang}',[databarangcon::class, 'edit'])->name('edit_databarang');
Route::post('/update_databarang/{id_databarang}',[databarangcon::class, 'update'])->name('update_databarang');

Route::get('/delete_databarang/{id_data_barang}',[databarangcon::class, 'delete'])->name('delete_databarang');

Route::get('/cetak_databarang',[databarangcon::class, 'cetak'])->name('cetak_databarang');



// kategori barang
Route::get('/view_kategori',[kategoribarangcon::class, 'index'])->name('view_kategori_index');
Route::get('/create_kategori',[kategoribarangcon::class, 'create'])->name('create_kategori');
Route::post('/insert_kategori',[kategoribarangcon::class, 'insert'])->name('insert_kategori');

Route::get('/edit_kategori/{id_kategori}',[kategoribarangcon::class, 'edit'])->name('edit_kategori');
Route::post('/update_kategori/{id_kategori}',[kategoribarangcon::class, 'update'])->name('update_kategori');

Route::get('/delete_kategori/{id_kategori}',[kategoribarangcon::class, 'delete'])->name('delete_kategori');

Route::get('/cetak_kategori',[kategoribarangcon::class, 'cetak'])->name('cetak_kategori');



// data outlet
Route::get('/view_outlet',[dataoutletcon::class, 'index'])->name('view_outlet_index');
Route::get('/create_outlet',[dataoutletcon::class, 'create'])->name('create_outlet');
Route::post('/insert_outlet',[dataoutletcon::class, 'insert'])->name('insert_outlet');

Route::get('/edit_outlet/{id_outlet}',[dataoutletcon::class, 'edit'])->name('edit_outlet');
Route::post('/update_outlet/{id_outlet}',[dataoutletcon::class, 'update'])->name('update_outlet');

Route::get('/delete_outlet/{id_outlet}',[dataoutletcon::class, 'delete'])->name('delete_outlet');

Route::get('/cetak_outlet',[dataoutletcon::class, 'cetak'])->name('cetak_outlet');


// data lain lain
Route::get('/view_datauser',[datausercon::class, 'index'])->name('view_datauser_index');


// login
Route::get('/logout',[DataPegawaiController::class, 'logoutuser'])->name('logout');
Route::get('/login',[DataPegawaiController::class, 'loginuser'])->name('login');
Route::get('/register',[DataPegawaiController::class, 'registeruser'])->name('register');


