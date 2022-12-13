<?php

namespace App\Http\Controllers;

use App\AlatBerat;
use App\PitWp;
use App\Tambang;
use App\WpPort;
use Illuminate\Http\Request;

class WpPortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cek = PitWp::all();
        
        $status="";
        
        if( ! $cek->isEmpty() )
        {
            $status = "isi";
        }else
        {
            $status="kosong";
        }

        $data = WpPort::all();
        $data_alat = AlatBerat::all();
        $data_tambang = Tambang::all();
        $status1 = "kosong";
        return view('port.index', compact('data_alat','data','data_tambang','status','status1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_alat = AlatBerat::all();
        $data_tambang = Tambang::all();
        return view('port.createform', compact('data_alat', 'data_tambang'));
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
            $data = new WpPort();
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
            return redirect()->route('ports.index')->with('status', 'Data pengantaran washing plant menuju port berhasil ditambahkan');
        } catch (\PDOException $e) {
            $msg = 'gagal menambahkan data pengantaran washing plant menuju port';
            return redirect()->route('ports.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WpPort  $wpPort
     * @return \Illuminate\Http\Response
     */
    public function show(WpPort $wpPort)
    {
        return view('port.show', compact('wpPort'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WpPort  $wpPort
     * @return \Illuminate\Http\Response
     */
    public function edit(WpPort $wpPort)
    {
        $data = $wpPort;
        $data_alat = AlatBerat::all();
        $data_tambang = Tambang::all();
        return view('port.edit', compact('data', 'data_alat', 'data_tambang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WpPort  $wpPort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WpPort $wpPort)
    {
        try {
            $wpPort->no_pit = $request->get('no_pit');
            $wpPort->no_wp = $request->get('no_wp');
            $wpPort->tahun = $request->get('tahun');
            $wpPort->rom_hauling = $request->get('rom_hauling');
            $wpPort->alat_berat_id  = $request->get('alat_berat_id');
            $wpPort->distance = $request->get('distance');
            $wpPort->max_load = $request->get('max_load');
            $wpPort->cycle_time = $request->get('cycle_time');
            $wpPort->cap = $request->get('cap');
            $wpPort->dt_need = $request->get('dt_need');
            $wpPort->tambang_id = $request->get('tambang_id');
            $wpPort->save();
            return redirect()->route('ports.index')->with('status', 'Data pengantaran washing plant menuju port berhasil dirubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data pengantaran washing plant menuju port';
            return redirect()->route('ports.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WpPort  $wpPort
     * @return \Illuminate\Http\Response
     */
    public function destroy(WpPort $wpPort)
    {
        try {
            $wpPort->delete();
            return redirect()->route('ports.index')->with('status', 'Data pengantaran washing plant menuju port berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data pengantaran washing plant menuju port';
            return redirect()->route('ports.index')->with('eror', $msg);
        }
    }

    public function filter(Request $request)
    {
        $cek = PitWp::all();
        
        $status="";
        
        if( ! $cek->isEmpty() )
        {
            $status = "isi";
        }else
        {
            $status="kosong";
        }

        $id=$request->get("tambang_id");
        $data = WpPort::where('tambang_id',$id)->orderBy("id")->get();
        $data_alat = AlatBerat::all();
        $data_tambang = Tambang::all();
        $status1 = "isi";
        return view('port.index', compact('data_alat','data','data_tambang','status','status1'));
    }
}
