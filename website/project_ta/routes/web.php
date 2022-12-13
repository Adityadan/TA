<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatBeratController;
use App\Http\Controllers\AlatBeratKaryawanController;
use App\Http\Controllers\AlatBeratPadaProsesController;
use App\Http\Controllers\AlatBeratPadaTambangController;
use App\Http\Controllers\BauksitController;
use App\Http\Controllers\BauksitPertambangController;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KaryawanPadaProsesController;
use App\Http\Controllers\PeralatanTambangController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\ProsesProduksiBauksitController;
use App\Http\Controllers\RencanaKegiatanController;
use App\Http\Controllers\TambangController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('karyawan', KaryawanController::class);