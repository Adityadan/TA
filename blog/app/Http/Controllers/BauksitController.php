<?php

namespace App\Http\Controllers;

use App\Bauksit;
use App\Tambang;
use Illuminate\Http\Request;

class BauksitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bauksit::all();
        $data_tambang = Tambang::all();
        $status = "kosong";
        return view('bauksit.index', compact('data', 'data_tambang','status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_tambang = Tambang::all();
        return view('bauksit.createform', compact('data_tambang'));
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
            $data = new Bauksit();
            $data->cf = $request->get('cf');
            $data->si02 = $request->get('Si02');
            $data->fe203 = $request->get('Fe203');
            $data->ti02 = $request->get('Ti02');
            $data->ai203 = $request->get('Ai203');
            $data->ratarata_tebal_ore = $request->get('Ratarata_tebal_ore');
            $data->ratarata_tebal_ob = $request->get('Ratarata_tebal_ob');
            $data->resources = $request->get('Resources');
            $data->total_ob = $request->get('Total_ob');
            $data->luas_area = $request->get('Luas_area');
            $data->tambang_id = $request->get('tambang_id');

            $data->save();
            
            return redirect()->route('bauksits.index')->with('status', 'Data bauksit berhasil ditambah');
        } catch (\PDOException $e) {
            $msg = 'gagal menambah data bauksit';
            return redirect()->route('bauksits.index')->with('eror', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bauksit  $bauksit
     * @return \Illuminate\Http\Response
     */
    public function show(Bauksit $bauksit)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bauksit  $bauksit
     * @return \Illuminate\Http\Response
     */
    public function edit(Bauksit $bauksit)
    {
        $data = $bauksit;
        $data_tambang = Tambang::all();
        return view('bauksit.edit', compact('data', 'data_tambang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bauksit  $bauksit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bauksit $bauksit)
    {

        try {
            $bauksit->cf = $request->get('cf');
            $bauksit->si02 = $request->get('si02');
            $bauksit->fe203 = $request->get('fe203');
            $bauksit->ti02 = $request->get('ti02');
            $bauksit->ai203 = $request->get('ai203');
            $bauksit->ratarata_tebal_ore = $request->get('ratarata_tebal_ore');
            $bauksit->ratarata_tebal_ob = $request->get('ratarata_tebal_ob');
            $bauksit->resources = $request->get('resources');
            $bauksit->total_ob = $request->get('total_ob');
            $bauksit->luas_area = $request->get('luas_area');
            $bauksit->tambang_id = $request->get('tambang_id');
            $bauksit->save();
            return redirect()->route('bauksits.index')->with('status', 'Data bauksit berhasil dirubah');
        } catch (\PDOException $e) {
            $msg = 'gagal merubah data bauksit';
            return redirect()->route('bauksits.index')->with('eror', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bauksit  $bauksit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bauksit $bauksit)
    {
        try {
            $bauksit->delete();
            return redirect()->route('bauksits.index')->with('status', 'Data bauksit berhasil dihapus');
        } catch (\PDOException $e) {
            $msg = 'gagal hapus data bauksit';
            return redirect()->route('bauksits.index')->with('eror', $msg);
        }
    }
    public function filter(Request $request)
    {
        $id=$request->get("tambang_id");
        $data = Bauksit::where('tambang_id',$id)->orderBy("id")->get();
        $data_tambang = Tambang::all();
        $status = "isi";
        return view('bauksit.index', compact('data', 'data_tambang','status'));
    }
}
