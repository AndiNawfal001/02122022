<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KaprogController;
use App\Http\Controllers\LevelUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengajuanBBController;
use App\Http\Controllers\PengajuanPBController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RuanganController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('/barang', function () {
    return view('barang.index');
});

Route::get('/barangmasuk', function () {
    return view('brg.barangmasuk');
});

// Route::get('/levelUser',[LevelUserController::class,'index']);
Route::get('/levelUser/tambah',[LevelUserController::class,'formTambah']);
Route::post('/levelUser/simpan',[LevelUserController::class,'simpan']);

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//Route Group untuk menggabungkan banyaknya middleware
Route::group(['middleware' => ['auth','level:admin,manajemen']], function (){
    Route::get('/levelUser',[LevelUserController::class,'index']);
});

Route::get('/User',[ UserController::class,'index']);
Route::get('/User/tambah',[ UserController::class,'formTambah']);
Route::post('/User/simpan',[ UserController::class,'simpan']);
Route::get('/User/edit/{id}',[UserController::class,'edit']);
Route::post('/User/edit/editsimpan',[ UserController::class,'editsimpan']);
Route::get('/User/hapus/{id}',[UserController::class,'hapus']);

// Route::get('/User/kaprog',[ KaprogController::class,'index']);

Route::get('/User/kaprog', [KaprogController::class, 'index']);

Route::group(['middleware' => ['auth','level:manajemen']], function (){
    Route::get('/barang',[ BarangMasukController::class,'index']);
    Route::get('/barang/tambah',[ BarangMasukController::class,'formTambah']);
    Route::post('/barang/simpan',[ BarangMasukController::class,'store']);
});

Route::get('/supplier',[ SupplierController::class,'index']);
Route::get('/supplier/tambah',[ SupplierController::class,'formTambah']);
Route::post('/supplier/simpan',[ SupplierController::class,'store']);
Route::get('/supplier/edit/{id}',[SupplierController::class,'edit']);
Route::post('/supplier/edit/editsimpan',[ SupplierController::class,'editsimpan']);
Route::get('/supplier/hapus/{id}',[SupplierController::class,'hapus']);

Route::get('/pengajuan/BB',[ PengajuanBBController::class,'index']);
Route::get('/pengajuan/BB/tambah',[ PengajuanBBController::class,'formTambah']);
Route::post('/pengajuan/BB/simpan',[ PengajuanBBController::class,'store']);
Route::get('/pengajuan/BB/edit/{id}',[PengajuanBBController::class,'edit']);
Route::post('/pengajuan/BB/edit/editsimpan',[ PengajuanBBController::class,'editsimpan']);
Route::get('/pengajuan/BB/hapus/{id}',[PengajuanBBController::class,'hapus']);

Route::get('/pengajuan/PB',[ PengajuanPBController::class,'index']);
Route::get('/pengajuan/PB/tambah',[ PengajuanPBController::class,'formTambah']);
Route::post('/pengajuan/PB/simpan',[ PengajuanPBController::class,'store']);
Route::get('/pengajuan/PB/edit/{id}',[PengajuanPBController::class,'edit']);
Route::post('/pengajuan/PB/edit/editsimpan',[ PengajuanPBController::class,'editsimpan']);
Route::get('/pengajuan/PB/hapus/{id}',[PengajuanPBController::class,'hapus']);

Route::get('/ruangan',[ RuanganController::class,'index']);
Route::get('/ruangan/tambah',[ RuanganController::class,'formTambah']);
Route::post('/ruangan/simpan',[ RuanganController::class,'store']);
Route::get('/ruangan/edit/{id}',[RuanganController::class,'edit']);
Route::post('/ruangan/edit/editsimpan',[ RuanganController::class,'editsimpan']);
Route::get('/ruangan/hapus/{id}',[RuanganController::class,'hapus']);


Route::get('/User/admin',[ AdminController::class,'index']);
Route::get('/User/admin/tambah',[ AdminController::class,'formTambah']);
Route::post('/User/admin/simpan',[ AdminController::class,'simpan']);

Route::get('/User/admin/edit/{id}',[ AdminController::class,'getAdminPengguna']);
Route::post('/User/admin/edit/update',[ SupplierController::class,'update']);


