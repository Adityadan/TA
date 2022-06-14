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
    Route::resource('produksis', 'ProsesProduksiBauksitController');
    Route::resource('tambangs', 'TambangController');
    Route::resource('penggalihans', 'PenggalihanBijihController');
    Route::resource('pengupasans', 'PengupasanTanahPucukController');
    Route::resource('pits', 'PitWpController');
    Route::resource('ports', 'WpPortController');
    Route::resource('rencanas', 'RencanaKegiatanController');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
