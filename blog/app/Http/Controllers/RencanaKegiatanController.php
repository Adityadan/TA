<?php

namespace App\Http\Controllers;

use App\RencanaKegiatan;
use App\Tambang;
use Illuminate\Http\Request;

class RencanaKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_rencana = RencanaKegiatan::all();
        $data_tambang = Tambang::all();
        return view('rencana.index', compact('data_rencana', 'data_tambang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_rencana = RencanaKegiatan::all();
        $data_tambang = Tambang::all();
        return view('rencana.index', compact('data_rencana', 'data_tambang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try {
            $data = new RencanaKegiatan();
            $data->kegiatan = $request->get('kegiatan');
            $data->musim = $request->get('musim');
            $data->mulai = $request->get('mulai');
            $data->akhir = $request->get('akhir');
            $data->durasi = $request->get('durasi');
            $data->presentase = $request->get('presentase');
            $data->ketergantungan = $request->get('ketergantungan');
            $data->tambang_id = $request->get('tambang_id');

            $data->save();
            return redirect()->route('rencanas.index')->with('status', 'Data Rencana Kegiatan berhasil ditambah');
        } catch (\PDOException $e) {
            $msg = 'gagal menambah data rencana kegiatan';
            return redirect()->route('rencanas.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanakegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(RencanaKegiatan $rencanakegiatan)
    {

        $data_rencana = RencanaKegiatan::all();
        $data_tambang = Tambang::all();
        return view('rencana.show', compact('data_rencana', 'data_tambang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanakegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(RencanaKegiatan $rencanakegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RencanaKegiatan  $rencanakegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RencanaKegiatan $rencanakegiatan)
    {

        try {
            $rencanakegiatan->kegiatan = $request->get('kegiatan');
            $rencanakegiatan->musim = $request->get('musim');
            $rencanakegiatan->mulai = $request->get('mulai');
            $rencanakegiatan->akhir = $request->get('akhir');
            $rencanakegiatan->durasi = $request->get('durasi');
            $rencanakegiatan->presentase = $request->get('presentase');
            $rencanakegiatan->ketergantungan = $request->get('ketergantungan');
            $rencanakegiatan->tambang_id = $request->get('tambang_id');
            $rencanakegiatan->save();
            return redirect()->route('rencanas.index')->with('status', 'Data Rencana Kegiatan berhasil dirubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data rencana kegiatan';
            return redirect()->route('rencanas.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanakegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(RencanaKegiatan $rencanakegiatan)
    {
        try {
            $rencanakegiatan->delete();
            return redirect()->route('rencanas.index')->with('status', 'Data Rencana Kegiatan berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data rencana kegiatan';
            return redirect()->route('rencanas.index')->with('eror', $msg);
        }
    }
}
