<?php

namespace App\Http\Controllers;

use App\Laporan;
use App\User;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_user = User::all();
        $data_laporan = Laporan::all();
        $status = "kosong";
        return view('laporan.index', compact('data_user', 'data_laporan','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            $data = new Laporan();
            $data->users_id = $request->get('users_id');
            $data->kerusakan = $request->get('kerusakan');
            $data->prioritas = $request->get('prioritas');
            $data->kinerja = $request->get('kinerja');
            $data->ringkasan = $request->get('ringkasan');
            $data->deskripsi = $request->get('deskripsi');
            $data->save();
            return redirect()->route('laporans.index')->with('status', 'Data laporan berhasil ditambahkan');
        } catch (\PDOException $e) {
            $msg = 'gagal menambah data laporan';
            return redirect()->route('laporans.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {

        try {
            $laporan->users_id = $request->get('users_id');
            $laporan->kerusakan = $request->get('kerusakan');
            $laporan->prioritas = $request->get('prioritas');
            $laporan->kinerja = $request->get('kinerja');
            $laporan->ringkasan = $request->get('ringkasan');
            $laporan->deskripsi = $request->get('deskripsi');
            $laporan->save();
            return redirect()->route('laporans.index')->with('status', 'Data laporan berhasil rubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data laporan';
            return redirect()->route('laporans.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        try {
            $laporan->delete();
            return redirect()->route('laporans.index')->with('status', 'Data laporan berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data laporan';
            return redirect()->route('laporans.index')->with('eror', $msg);
        }
    }
}
