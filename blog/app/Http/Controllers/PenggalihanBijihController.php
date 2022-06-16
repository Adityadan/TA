<?php

namespace App\Http\Controllers;

use App\PenggalihanBijih;
use App\Tambang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggalihanBijihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_brutto = DB::table('penggalihan_bijih')->sum('total_brutto');
        $maxrecovery = DB::table('penggalihan_bijih')->max('recovery_pertambangan');
        $total_nett = DB::table('penggalihan_bijih')->sum('total_nett');
        $data = PenggalihanBijih::all();
        $data_tambang = Tambang::all();
        return view('penggalihan.index', compact('total_brutto','maxrecovery','total_nett','data','data_tambang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Tambang::all();
        return view('penggalihan.createform', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PenggalihanBijih();
        $data->rencana_tahun = $request->get('RencanaTahun');
        $data->realisasi_tahun = $request->get('RealisasiTahun');
        $data->lokasi = $request->get('Lokasi');
        $data->blok = $request->get('Blok');
        $data->pit = $request->get('Pit');
        $data->cutofgrade_ni = $request->get('CutofgradeNi');
        $data->bulan = $request->get('Bulan');
        $data->total_brutto = $request->get('Total_brutto');
        $data->recovery_pertambangan = $request->get('Recovery_pertambangan');
        $data->total_nett = $request->get('Total_nett');
        $data->tambang_id = $request->get('Tambang_id');
        $data->save();
        return redirect()->route('penggalihans.index')->with('status', 'Data Penggalihan Bijih berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PenggalihanBijih  $penggalihanBijih
     * @return \Illuminate\Http\Response
     */
    public function show(PenggalihanBijih $penggalihanBijih)
    {
        return view('penggalihan.show', compact('penggalihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PenggalihanBijih  $penggalihanBijih
     * @return \Illuminate\Http\Response
     */
    public function edit(PenggalihanBijih $penggalihanBijih)
    {
        $data = $penggalihanBijih;
        $data_tambang = Tambang::all();
        return view('penggalihan.editform', compact('data', 'data_tambang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PenggalihanBijih  $penggalihanBijih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenggalihanBijih $penggalihanBijih)
    {
        dd ($request);
        $penggalihanBijih->rencana_tahun = $request->get('RencanaTahun');
        $penggalihanBijih->realisasi_tahun = $request->get('RealisasiTahun');
        $penggalihanBijih->lokasi = $request->get('Lokasi');
        $penggalihanBijih->blok = $request->get('Blok');
        $penggalihanBijih->pit = $request->get('Pit');
        $penggalihanBijih->cutofgrade_ni = $request->get('CutofgradeNi');
        $penggalihanBijih->bulan = $request->get('Bulan');
        $penggalihanBijih->total_brutto = $request->get('Total_brutto');
        $penggalihanBijih->recovery_pertambangan = $request->get('Recovery_pertambangan');
        $penggalihanBijih->total_nett = $request->get('Total_nett');
        $penggalihanBijih->tambang_id = $request->get('Tambang_id');
        $penggalihanBijih->save();
        return redirect()->route('penggalihans.index')->with('status', 'Data Penggalihan Bijih berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PenggalihanBijih  $penggalihanBijih
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenggalihanBijih $penggalihanBijih)
    {
        try {
            $penggalihanBijih->delete();
            return redirect()->route('penggalihans.index')->with('status', 'Data Penggalihan Bijih berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data penggalihan';
            return redirect()->route('penggalihans.index')->with('eror', $msg);
        }
    }
}
