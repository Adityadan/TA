<?php

namespace App\Http\Controllers;

use App\Tambang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TambangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tambang::all();
        return view('tambang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambang.createform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tambang();
        $data->nama = $request->get('Nama');
        $data->lokasi = $request->get('Lokasi');
        $data->target = $request->get('Target');
        $data->status = $request->get('Status');
        $data->hasil_pertambangan = $request->get('Hasil_pertambangan');
        $data->hari_tanggal = $request->get('Hari_tanggal');
        $data->kode_tp = $request->get('Kode_tp');
        $data->kordinat = $request->get('Kordinat');
        $data->kemiringan = $request->get('Kemiringan');
        $data->blok = $request->get('Blok');
        $data->cuaca = $request->get('Cuaca');
        $data->logger = $request->get('Logger');
        $data->digger = $request->get('Digger');

        $data->save();
        return redirect()->route('tambangs.index')->with('status', 'Data Bauksit berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tambang  $tambang
     * @return \Illuminate\Http\Response
     */
    public function show(Tambang $tambang)
    {
        return view('tambang.show', compact('tambang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tambang  $tambang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tambang $tambang)
    {
        
        $data = $tambang;
        return view('tambang.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tambang  $tambang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tambang $tambang)
    {
        $tambang->nama = $request->get('Nama');
        $tambang->lokasi = $request->get('Lokasi');
        $tambang->status = $request->get('Status');
        $tambang->hasil_pertambangan = $request->get('Hasil_pertambangan');
        $tambang->hari_tanggal = $request->get('Hari_tanggal');
        $tambang->kode_tp = $request->get('Kode_tp');
        $tambang->kordinat = $request->get('Kordinat');
        $tambang->kemiringan = $request->get('Kemiringan');
        $tambang->blok = $request->get('Blok');
        $tambang->cuaca = $request->get('Cuaca');
        $tambang->logger = $request->get('Logger');
        $tambang->digger = $request->get('Digger');

        $tambang->save();
        return redirect()->route('tambangs.index')->with('status', 'Data Kegiatan Pertambangan berhasil ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tambang  $tambang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tambang $tambang)
    {
        try {
            $tambang->delete();
            return redirect()->route('tambangs.index')->with('status', 'Data Kegiatan Pertambangan berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data Kegiatan Pertambangan';
            return redirect()->route('tambangs.index')->with('eror', $msg);
        }
    }
    public function gmaps(Tambang $tambang)

    {

    	$tambang->kordinat = $request->get('Kordinat');

    	return view('gmaps',compact('kordinat'));

    }
}
