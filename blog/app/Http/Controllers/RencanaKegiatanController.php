<?php

namespace App\Http\Controllers;

use App\RencanaKegiatan;
use Illuminate\Http\Request;
use Redirect,Response;
class RencanaKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = RencanaKegiatan::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('rencana.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = RencanaKegiatan::insert($insertArr);   
        return Response::json($event);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = RencanaKegiatan::where($where)->update($updateArr);
 
        return Response::json($event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RencanaKegiatan  $rencanaKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $event = RencanaKegiatan::where('id',$request->id)->delete();
   
        return Response::json($event);
    }
    // public function action(Request $request)
    // {
    // 	if($request->ajax())
    // 	{
    // 		if($request->type == 'add')
    // 		{
    // 			$event = RencanaKegiatan::create([
    // 				'nama_kegiatan'		=>	$request->nama_kegiatan,
    // 				'tanggal_mulai'		=>	$request->tanggal_mulai,
    // 				'tanggal_akhir'		=>	$request->tanggal_akhir
    // 			]);

    // 			return response()->json($event);
    // 		}

    // 		if($request->type == 'update')
    // 		{
    // 			$event = RencanaKegiatan::find($request->id)->update([
    // 				'nama_kegiatan'		=>	$request->nama_kegiatan,
    // 				'tanggal_mulai'		=>	$request->tanggal_mulai,
    // 				'tanggal_akhir'		=>	$request->tanggal_akhir
    // 			]);

    // 			return response()->json($event);
    // 		}

    // 		if($request->type == 'delete')
    // 		{
    // 			$event = RencanaKegiatan::find($request->id)->delete();

    // 			return response()->json($event);
    // 		}
    // 	}
    // }
}
