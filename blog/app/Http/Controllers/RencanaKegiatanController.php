<?php

namespace App\Http\Controllers;

use App\RencanaKegiatan;
use Illuminate\Http\Request;

class RencanaKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RencanaKegiatan::whereDate('tanggal_mulai', '>=', $request->start)
                ->whereDate('tanggal_akhir',   '<=', $request->end)
                ->get(['id', 'nama_kegiatan', 'tanggal_mulai', 'tanggal_akhir']);
            return response()->json($data);
        }
        return view('rencana.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            if ($request->type == 'add') {
                $event = RencanaKegiatan::create([
                    'nama_kegiatan'        =>    $request->nama_kegiatan,
                    'tanggal_mulai'        =>    $request->tanggal_mulai,
                    'tanggal_akhir'        =>    $request->tanggal_akhir
                ]);
    
                return response()->json($event);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanaKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(RencanaKegiatan $rencanaKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanaKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(RencanaKegiatan $rencanaKegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RencanaKegiatan  $rencanaKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RencanaKegiatan $rencanaKegiatan)
    {
        if($request->ajax())
        {
            if($request->type == 'update')
    		{
    			$event = RencanaKegiatan::find($request->id)->update([
    				'nama_kegiatan'        =>    $request->nama_kegiatan,
                    'tanggal_mulai'        =>    $request->tanggal_mulai,
                    'tanggal_akhir'        =>    $request->tanggal_akhir
    			]);

    			return response()->json($event);
    		}
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanaKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,RencanaKegiatan $rencanaKegiatan)
    {
        if($request->ajax())
        {
            if($request->type == 'update')
    		{
    			$event = RencanaKegiatan::find($request->id)->delete();

    			return response()->json($event);
    		}
        }
    }
    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = RencanaKegiatan::create([
    				'nama_kegiatan'		=>	$request->nama_kegiatan,
    				'tanggal_mulai'		=>	$request->tanggal_mulai,
    				'tanggal_akhir'		=>	$request->tanggal_akhir
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = RencanaKegiatan::find($request->id)->update([
    				'nama_kegiatan'		=>	$request->nama_kegiatan,
    				'tanggal_mulai'		=>	$request->tanggal_mulai,
    				'tanggal_akhir'		=>	$request->tanggal_akhir
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = RencanaKegiatan::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
