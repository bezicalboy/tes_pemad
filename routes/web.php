<?php

use App\Http\Controllers\KlienController;
use App\Http\Controllers\KlienBahasaController;
use App\Http\Controllers\KlienPerusaanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PembayaranAtasPembelianController;
use App\Http\Controllers\PenawaranJasaController;
use App\Http\Controllers\PermintaanJasaController;
use App\Http\Controllers\PesananPembelianController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\TipePekerjaanController;
use App\Http\Controllers\UserBahasaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $title = 'Dashboard';
    return view('page.index', ['title'=>$title]);
});


Route::resource('/klien',KlienController::class);
Route::resource('/klien/bahasa',KlienBahasaController::class);
Route::resource('/klien/tagihan',TagihanController::class);
Route::resource('/klien/pembayaran',PembayaranAtasPembelianController::class);
Route::resource('/klien/pesanan',PesananPembelianController::class);
Route::resource('/klien/permintaan',PermintaanJasaController::class);
Route::resource('/klien/perusahaan',KlienPerusaanController::class);

Route::resource('/user',UserController::class);
Route::resource('/user/bahasa',UserBahasaController::class);
Route::resource('/user/jasa',PenawaranJasaController::class);
Route::resource('/user/pekerjaan',PekerjaanController::class);
Route::resource('/user/pekerjaan/tipe',TipePekerjaanController::class);
Route::get('/proyek/store/{id}/createnew',[ProyekController::class,'createNew']);
Route::put('/proyek/store/{id}',[ProyekController::class,'storeNew']);
Route::resource('/proyek',ProyekController::class);
