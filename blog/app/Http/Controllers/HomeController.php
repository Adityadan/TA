<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jumlah_laporan = DB::table('laporan')->count();
        $jumlah_kegiatan = DB::table('rencana_kegiatan')->count();
        $jumlah_karyawan = DB::table('karyawan')->count();
        
        $jumlah_totalOB = DB::table('bauksit')->sum('total_ob');
        $jumlah_alatberat = DB::table('alat_berat')->sum('jumlah');
        $totalbauksit = DB::table('bauksit')->sum('resources');
        return view('dashboard', compact('jumlah_laporan','jumlah_kegiatan','jumlah_karyawan','jumlah_totalOB','jumlah_alatberat','totalbauksit'));
    }
}
