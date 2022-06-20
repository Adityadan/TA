@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Pengankutan washing plant Menuju port
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Pengankutan washing plant Menuju port</a>
        </li>
    </ul>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="portlet-body">
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
                    <a href="{{route('ports.create') }}" class="btn btn-primary">
                        + Tambah Data Pengankutan washing plant Menuju port
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2>Data Pengankutan washing plant Menuju port</h2>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>no pit</th>
                                <th>no washing plant</th>
                                <th>tahun</th>
                                <th>Detail Data</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->id }}
                                </td>
                                <td>
                                    {{$d->no_pit}}
                                </td>
                                <td>
                                    {{$d->no_wp}}
                                </td>
                                <td>
                                    {{$d->tahun}}
                                </td>
                                <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td>
                                
                                <td>
                                    <a href="{{route('ports.edit',$d->id)}}" class="btn btn-warning">edit</a>
                                    <br><br>
                                    <form method="POST" action="{{ url('ports/'.$d->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                    </form>
                                </td>
                                
                            </tr>
                            <!-- Modal Detail -->
                            <div id="modalDetail_{{ $d->id }}" class="modal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Detail proses pengangkutan pit menuju washing plant {{ $d->id }}</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nomor pit</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->no_pit }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nomor washing plant</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->no_wp }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">tahun</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tahun }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kendaraan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_berat->merk }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jarak</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->distance }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas maksimal</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->max_load }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->cap }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kendaraan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_berat->merk }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jarak tempuh</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->distance }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas maksimal</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->max_load }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">waktu pengerjaan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->cycle_time }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->cap }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">DT need</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->dt_need }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">pertambangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tambang->nama }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="{{url('tambangs/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('tempat_script')
<script>
    jQuery(document).ready(function() {
        App.init();
        TableManaged.init();
    });
</script>
@endsection