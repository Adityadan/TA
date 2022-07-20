<?php

namespace App\Http\Controllers;

use App\RencanaKegiatan;
use Carbon\Carbon;
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
        $deadline = DB::select('SELECT * from rencana_kegiatan where akhir > now() - INTERVAL 60 day');
        $prioritas = DB::select('SELECT * from rencana_kegiatan where akhir > now() - INTERVAL 60 day ORDER BY akhir DESC');
        $alert = "kosong";
        if ($prioritas != null) {
            $alert = "rencana kegiatan " . $prioritas->kegiatan . " harus segera diselesaikan terlebih dahulu";
        }
        return view('dashboard', compact('alert', 'deadline'));
    }
}
$prioritas = RencanaKegiatan::where('akhir', '<', '100')->orderBy('akhir')->first();