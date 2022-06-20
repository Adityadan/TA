@extends('layouts.conquer')

@section('tempat_konten')
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Rencana Kegiatan Pertambangan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a>Rencana Kegiatan Pertambangan</a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    @if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
    @endif
    @if(session('eror'))
    <div class="alert alert-danger">
        {{session('eror')}}
    </div>
    @endif
    <a href="#modaldetail" class="btn btn-primary" data-toggle="modal">
        detail rencana kegiatan
    </a>
    <div class="col-md-12">
        <div class="container">

            <div class="response"></div>

            <div id='chart_div'></div>
        </div>
    </div>
</div>


<!-- END PAGE CONTENT-->
<div id="modaldetail" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="classInfo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                </button>
                <h4 class="modal-title" id="classModalLabel">
                    Detail Rencana Kegiatan
                </h4>
            </div>
            <a href="#modalladd" class="btn btn-primary" data-toggle="modal">
                Tambah Data rencana kegiatan
            </a>
            <div class="modal-body">
                <table id="classTable" class="table table-bordered">
                    <thead>
                    </thead>
                    <tr>
                        <td>id</td>
                        <td>Kegiatan</td>
                        <td>Musim</td>
                        <td>mulai</td>
                        <td>akhir</td>
                        <td>presentase selesai</td>
                        <td>kode pertambangan</td>
                        <td>Opsi Data</td>
                    </tr>
                    <tbody>
                        @foreach($data_rencana as $d)
                        <tr>
                            <td>
                                {{$d->id}}
                            </td>
                            <td>
                                {{$d->kegiatan}}
                            </td>
                            <td>
                                {{$d->musim}}
                            </td>
                            <td>
                                {{$d->mulai}}
                            </td>
                            <td>
                                {{$d->akhir}}
                            </td>
                            <td>
                                {{$d->presentase}}
                            </td>
                            <td>
                                {{$d->tambang->id}}
                            </td>
                            
                            <td>
                                <a href="#modaledit{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                    edit
                                </a>
                                <br><br>
                                <form method="POST" action="{{ url('rencanas/'.$d->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                </form>
                            </td>
                        </tr>

                        <div class="modal fade" id="modaledit{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h4 class="modal-title">form Edit data rencana kegiatan
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('rencanas.update',$d->id) }}">
                                                    @csrf
                                                    @method("PUT")
                                                    <div class="form-group row">
                                                        <label for="kegiatan" class="col-sm-2 col-form-label">kegiatan</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="{{$d->kegiatan}}" name="kegiatan" class="form-control" id="kegiatan" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="musim" class="col-sm-2 col-form-label">musim</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="{{$d->musim}}" name="musim" class="form-control" id="musim" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="mulai" class="col-sm-2 col-form-label">mulai</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="{{$d->mulai}}" name="mulai" class="form-control" id="mulai" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="akhir" class="col-sm-2 col-form-label">Akhir</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="{{$d->akhir}}" name="akhir" class="form-control" id="akhir" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="presentase" class="col-sm-2 col-form-label">Presentase Selesai</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" value="{{$d->presentase}}" name="presentase" class="form-control" id="presentase" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" name="tambang_id" id="tambang_id" required>
                                                                @foreach($data_tambang as $d)
                                                                <option value="{{$d->id}}">{{$d->nama}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-10">
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah rencana kegiatan</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('rencanas.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="kegiatan" class="col-sm-2 col-form-label">kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="kegiatan" class="form-control" id="kegiatan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="musim" class="col-sm-2 col-form-label">musim</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="musim" class="form-control" id="musim" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mulai" class="col-sm-2 col-form-label">mulai</label>
                        <div class="col-sm-10">
                            <input type="text" value="YYYY,MM,DD" name="mulai" class="form-control" id="mulai" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="akhir" class="col-sm-2 col-form-label">Akhir</label>
                        <div class="col-sm-10">
                            <input type="text" value="YYYY,MM,DD" name="akhir" class="form-control" id="akhir" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="presentase" class="col-sm-2 col-form-label">Presentase Selesai</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="presentase" class="form-control" id="presentase" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tambang_id" id="tambang_id" required>
                                @foreach($data_tambang as $d)
                                <option value="{{$d->id}}">{{$d->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info">Save changes</button>
            </div> -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



@endsection



@section('tempat_script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['gantt']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('string', 'Resource');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');

        data.addRows([
            @foreach($data_rencana as $d)
            ['{{$d->id}}', '{{$d->kegiatan}}', '{{$d->musim}}',
                new Date({{$d->mulai}}), new Date({{$d->akhir}}), null, {{$d->presentase}}, null
            ],
            @endforeach
        ]);

        var options = {
            height: 400,
            gantt: {
                trackHeight: 30
            }
        };

        var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
</script>
@endsection