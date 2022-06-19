<?php

namespace App\Http\Controllers;

use App\Karyawan;
use App\RencanaKegiatan;
use App\Tambang;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karyawan::all();
        $data_tambang = Tambang::all();
        $data_rencana = RencanaKegiatan::all();
        return view('karyawan.index', compact('data', 'data_tambang', 'data_rencana'));
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
        return view('karyawan.createform', compact('data_tambang', 'data_rencana'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('insert-permission',$request);
        try {
            $data = new Karyawan();
            $data->nama = $request->get('Nama');
            $data->devisi = $request->get('Devisi');
            $data->jabatan = $request->get('Jabatan');
            $data->nik = $request->get('Nik');
            $data->tanggallahir = $request->get('Tanggallahir');
            $data->jeniskelamin = $request->get('jeniskelamin');
            $data->alamat = $request->get('Alamat');
            $data->no_telp = $request->get('No_telp');
            $data->tambang_id = $request->get('tambang_id');
            $data->rencana_kegiatan_id = $request->get('rencana_kegiatan_id');
            $data->save();
            return redirect()->route('karyawans.index')->with('status', 'Data Karyawan berhasil ditambahkan');
        } catch (\PDOException $e) {
            $msg = 'gagal menambah data karyawans';
            return redirect()->route('karyawans.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $data = $karyawan;
        $data_tambang = Tambang::all();
        $data_rencana = RencanaKegiatan::all();
        return view('karyawan.editform', compact('data', 'data_tambang', 'data_rencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        
        $this->authorize('edit-permission',$request);
        try {
            $karyawan->nama = $request->get('Nama');
            $karyawan->devisi = $request->get('Devisi');
            $karyawan->jabatan = $request->get('Jabatan');
            $karyawan->nik = $request->get('Nik');
            $karyawan->tanggallahir = $request->get('Tanggallahir');
            $karyawan->jeniskelamin = $request->get('jeniskelamin');
            $karyawan->alamat = $request->get('Alamat');
            $karyawan->no_telp = $request->get('No_telp');
            $karyawan->tambang_id = $request->get('tambang_id');
            $karyawan->rencana_kegiatan_id = $request->get('rencana_kegiatan_id');
            $karyawan->save();
            return redirect()->route('karyawans.index')->with('status', 'Data Karyawan berhasil rubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data karyawans';
            return redirect()->route('karyawans.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        try {
            $karyawan->delete();
            return redirect()->route('karyawans.index')->with('status', 'Data karyawan berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data karyawans';
            return redirect()->route('karyawans.index')->with('eror', $msg);
        }
    }
}
