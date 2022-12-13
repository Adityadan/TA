<?php

use App\Http\Controllers\RencanaKegiatanController;
use App\RencanaKegiatan;
use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    });
    Route::resource('karyawans', 'KaryawanController');
    Route::resource('alats', 'AlatBeratController');
    Route::resource('bauksits', 'BauksitController');
    Route::resource('tambangs', 'TambangController');
    Route::resource('penggalihans', 'PenggalihanBijihController');
    Route::resource('pengupasans', 'PengupasanTanahPucukController');
    Route::resource('pits', 'PitWpController');
    Route::resource('ports', 'WpPortController');
    Route::resource('rencanas', 'RencanaKegiatanController');
    Route::resource('laporans', 'LaporanController');
    
    Route::get('tambang/filter','TambangController@filter')->name('tambang.filter');
    Route::get('bauksit/filter','BauksitController@filter')->name('bauksit.filter');
    Route::get('rencana/filter','RencanaKegiatanController@filter')->name('rencana.filter');
    Route::get('alat/filter','AlatBeratController@filter')->name('alat.filter');
    Route::get('pengupasan/filter','PengupasanTanahPucukController@filter')->name('pengupasan.filter');
    Route::get('penggalihan/filter','PenggalihanBijihController@filter')->name('penggalihan.filter');
    Route::get('pit/filter','PitWPController@filter')->name('pit.filter');
    Route::get('port/filter','WpPortController@filter')->name('port.filter');
    Route::get('karyawan/filter','KaryawanController@filter')->name('karyawan.filter');
    Route::get('laporan/filter','LaporanController@filter')->name('laporan.filter');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
