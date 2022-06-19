<?php

namespace App\Http\Controllers;

use App\AlatBerat;
use App\RencanaKegiatan;
use App\Tambang;
use Illuminate\Http\Request;

class AlatBeratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AlatBerat::all();
        $data_tambang = Tambang::all();
        $data_rencana = RencanaKegiatan::all();
        return view('alat.index', compact('data', 'data_tambang', 'data_rencana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_tambang = Tambang::all();
        $data_rencana = RencanaKegiatan::all();
        return view('alat.createform', compact('data_tambang', 'data_rencana'));
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
            $data = new AlatBerat();
            $data->fungsi = $request->get('Fungsi');
            $data->merk = $request->get('Merk');
            $data->jenis = $request->get('Jenis');
            $data->tipe = $request->get('Tipe');
            $data->jumlah = $request->get('Jumlah');
            $data->tambang_id = $request->get('tambang_id');
            $data->rencana_kegiatan_id = $request->get('rencana_kegiatan_id');
            $data->save();
            return redirect()->route('alats.index')->with('status', 'Data alat berat berhasil ditambah');
        } catch (\PDOException $e) {
            $msg = 'gagal menambah data alat berat';
            return redirect()->route('alats.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AlatBerat  $alat
     * @return \Illuminate\Http\Response
     */
    public function show(AlatBerat $alat)
    {
        return view('alat.show', compact('alat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function edit(AlatBerat $alat)
    {
        $data = $alat;
        $data_tambang = Tambang::all();
        $data_rencana = RencanaKegiatan::all();
        return view('alat.edit', compact('data', 'data_tambang', 'data_rencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlatBerat $alat)
    {
        try {
            $alat->fungsi = $request->get('fungsi');
            $alat->merk = $request->get('merk');
            $alat->jenis = $request->get('jenis');
            $alat->tipe = $request->get('tipe');
            $alat->jumlah = $request->get('jumlah');
            $alat->tambang_id = $request->get('tambang_id');
            $alat->rencana_kegiatan_id = $request->get('rencana_kegiatan_id');
            $alat->save();
            return redirect()->route('alats.index')->with('status', 'Data Alat Berat berhasil dirubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data alat berat';
            return redirect()->route('alats.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlatBerat $alat)
    {
        try {
            $alat->delete();
            return redirect()->route('alats.index')->with('status', 'Data bauksit berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data alat berat';
            return redirect()->route('alats.index')->with('eror', $msg);
        }
    }
}
