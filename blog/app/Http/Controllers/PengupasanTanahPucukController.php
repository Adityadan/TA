<?php

namespace App\Http\Controllers;

use App\PengupasanTanahPucuk;
use App\Tambang;
use Illuminate\Http\Request;

class PengupasanTanahPucukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PengupasanTanahPucuk::all();
        $data_tambang = Tambang::all();
        return view('pengupasan.index', compact('data','data_tambang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Tambang::all();
        return view('pengupasan.createform', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PengupasanTanahPucuk();
        $data->tahun_rencana = $request->get('TahunRencana');
        $data->tahun_realisasi = $request->get('TahunRealisasi');
        $data->lokasi = $request->get('Lokasi');
        $data->bulan = $request->get('Bulan');
        $data->jumlah_bcm = $request->get('JumlahBcm');
        $data->jumlah_ton = $request->get('JumlahTon');
        $data->berat_jenis_material = $request->get('BeratJenisMaterial');
        $data->total = $request->get('Total');
        $data->keteragan = $request->get('Keteragan');
        $data->alat_gali_muat = $request->get('AlatGaliMuat');
        $data->alat_dorong = $request->get('AlatDorong');
        $data->alat_bongkar = $request->get('AlatBongkar');
        $data->alat_angkut = $request->get('AlatAngkut');
        $data->jarak_angkut = $request->get('JarakAngkut');
        $data->satuan = $request->get('Satuan');
        $data->tambang_id = $request->get('Tambang_id');
        $data->save();
        return redirect()->route('pengupasans.index')->with('status', 'Data Pengupasan Tanah Pucuk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PengupasanTanahPucuk  $pengupasanTanahPucuk
     * @return \Illuminate\Http\Response
     */
    public function show(PengupasanTanahPucuk $pengupasanTanahPucuk)
    {
        return view('pengupasan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PengupasanTanahPucuk  $pengupasanTanahPucuk
     * @return \Illuminate\Http\Response
     */
    public function edit(PengupasanTanahPucuk $pengupasanTanahPucuk)
    {
        $data = $pengupasanTanahPucuk;
        $data_tambang = Tambang::all();
        return view('pengupasan.editform', compact('data', 'data_tambang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PengupasanTanahPucuk  $pengupasanTanahPucuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengupasanTanahPucuk $pengupasanTanahPucuk)
    {
        $pengupasanTanahPucuk->tahun_rencana = $request->get('TahunRencana');
        $pengupasanTanahPucuk->tahun_realisasi = $request->get('TahunRealisasi');
        $pengupasanTanahPucuk->lokasi = $request->get('Lokasi');
        $pengupasanTanahPucuk->bulan = $request->get('Bulan');
        $pengupasanTanahPucuk->jumlah_bcm = $request->get('JumlahBcm');
        $pengupasanTanahPucuk->jumlah_ton = $request->get('JumlahTon');
        $pengupasanTanahPucuk->berat_jenis_material = $request->get('BeratJenisMaterial');
        $pengupasanTanahPucuk->total = $request->get('Total');
        $pengupasanTanahPucuk->keteragan = $request->get('Keteragan');
        $pengupasanTanahPucuk->alat_gali_muat = $request->get('AlatGaliMuat');
        $pengupasanTanahPucuk->alat_dorong = $request->get('AlatDorong');
        $pengupasanTanahPucuk->alat_bongkar = $request->get('AlatBongkar');
        $pengupasanTanahPucuk->alat_angkut = $request->get('AlatAngkut');
        $pengupasanTanahPucuk->jarak_angkut = $request->get('JarakAngkut');
        $pengupasanTanahPucuk->satuan = $request->get('Satuan');
        $pengupasanTanahPucuk->tambang_id = $request->get('Tambang_id');
        $pengupasanTanahPucuk->save();
        return redirect()->route('pengupasans.index')->with('status', 'Data Pengupasan Tanah Pucuk berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PengupasanTanahPucuk  $pengupasanTanahPucuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengupasanTanahPucuk $pengupasanTanahPucuk)
    {
        try {
            $pengupasanTanahPucuk->delete();
            return redirect()->route('pengupasans.index')->with('status', 'Data Pengupasan Tanah Pucuk berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data Pengupasan Tanah Pucuk';
            return redirect()->route('pengupasans.index')->with('eror', $msg);
        }
    }
}
