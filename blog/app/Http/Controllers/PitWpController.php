<?php

namespace App\Http\Controllers;

use App\AlatBerat;
use App\PitWp;
use App\Tambang;
use Illuminate\Http\Request;

class PitWpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PitWp::all();
        $data_tambang = Tambang::all();
        $data_alat = AlatBerat::all();
        return view('pit.index', compact('data','data_tambang','data_alat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_tambang = Tambang::all();
        $data_alat = AlatBerat::all();
        return view('pit.createform', compact('data_tambang','data_alat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new PitWp();
        $data->no_pit = $request->get('no_pit');
        $data->no_wp = $request->get('no_wp');
        $data->tahun = $request->get('tahun');
        $data->rom_hauling = $request->get('rom_hauling');
        $data->alat_berat_id = $request->get('alat_berat_id');
        $data->distance = $request->get('distance');
        $data->max_load = $request->get('max_load');
        $data->cycle_time = $request->get('cycle_time');
        $data->cap = $request->get('cap');
        $data->dt_need = $request->get('dt_need');
        $data->tambang_id = $request->get('tambang_id');
        $data->save();
        return redirect()->route('pits.index')->with('status', 'Data Pit menuju Washing Plant berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PitWp  $wpPit
     * @return \Illuminate\Http\Response
     */
    public function show(PitWp $wpPit)
    {
        return view('pit.show', compact('wpPit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PitWp  $wpPit
     * @return \Illuminate\Http\Response
     */
    public function edit(PitWp $wpPit)
    {
        $data = $wpPit;
        $data_tambang = Tambang::all();
        $data_alat = AlatBerat::all();
        return view('pit.edit', compact('data','data_tambang','data_alat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PitWp  $wpPit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PitWp $wpPit)
    {
        $wpPit->no_pit = $request->get('no_pit');
        $wpPit->no_wp = $request->get('no_wp');
        $wpPit->tahun = $request->get('tahun');
        $wpPit->rom_hauling = $request->get('rom_hauling');
        $wpPit->alat_berat_id = $request->get('alat_berat_id');
        $wpPit->distance = $request->get('distance');
        $wpPit->max_load = $request->get('max_load');
        $wpPit->cycle_time = $request->get('cycle_time');
        $wpPit->cap = $request->get('cap');
        $wpPit->dt_need = $request->get('dt_need');
        $wpPit->tambang_id = $request->get('tambang_id');
        $wpPit->save();
        return redirect()->route('pits.index')->with('status', 'Data Pit menuju Washing Plant berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PitWp  $wpPit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PitWp $wpPit)
    {
        try {
            $wpPit->delete();
            return redirect()->route('pits.index')->with('status', 'Data Pit menuju Washing Plant berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data karyawans';
            return redirect()->route('pits.index')->with('eror', $msg);
        }
    }
}
