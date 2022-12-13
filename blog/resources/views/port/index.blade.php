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
            <a href="#">Data Pengangkutan washing plant Menuju port</a>
        </li>
    </ul>
</div>
<form enctype="multipart/form-data" method="GET" action="{{ route('port.filter') }}">
    @csrf
    <div class="form-group row">
        <label for="tambang_id" class="col-sm-2 col-form-label">Tambang ID</label>
        <div class="col-sm-10">
            <select class="form-control" name="tambang_id" id="tambang_id">
                @foreach($data_tambang as $d)
                <option value="{{$d->id}}">
                    {{$d->nama}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
            Tampilkan
        </button>
    </div>
</form>
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
                    @if($status=="isi")
                    <a href="{{route('ports.create') }}" class="btn btn-primary">
                        + Tambah Data Pengankutan washing plant Menuju port
                    </a>
                    @endif
                    @if($status=="kosong")
                    <div class="alert alert-warning">
                        ISI DATA PENGUPASAN TERLEBIH DAHULU !!!
                    </div>
                    @endif
                    <h2>Data Pengankutan washing plant Menuju port</h2>
                    <table id="" class="table table-bordered table-striped table-earning dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nomor Port</th>
                                <th>Nomor Washing Plant</th>
                                <th>Tahun</th>
                                <th>Rom Hauling</th>
                                <th>Alat Berat</th>
                                <th>Jarak Pengangkutan</th>
                                <th>Kapasitas Maksimal</th>
                                <th>Waktu Pengerjaan</th>
                                <th>Kapasitas Pengangkutan</th>
                                <th>Jumlah Dump Truck</th>
                                <th>Kode Pertambangan</th>
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
                                    {{$d->rom_hauling }}
                                </td>
                                <td>
                                    {{$d->alat_berat -> merk}}
                                </td>
                                <td>
                                    {{$d->distance}}
                                </td>
                                <td>
                                    {{$d->max_load}}
                                </td>
                                <td>
                                    {{$d->cycle_time }}
                                </td>
                                <td>
                                    {{$d->cap}}
                                </td>
                                <td>
                                    {{$d->dt_need}}
                                </td>
                                <td>
                                    {{$d->tambang->nama}}
                                </td>
                                <!-- <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td> -->

                                <td>
                                    <a href="#modaledit{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        edit
                                    </a>
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

                            <!-- Modal Edit -->
                            <div class="modal fade" id="modaledit{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">form rubah proses pengangkutan pit menuju washing plant</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('pits.update',$d->id) }}">
                                                @csrf
                                                @method("PUT")
                                                <div class="form-group row">
                                                    <label for="no_pit" class="col-sm-2 col-form-label">nomor pit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->no_pit}}" name="no_pit" class="form-control" id="no_pit" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="no_wp" class="col-sm-2 col-form-label">nomor washing plant</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->no_wp}}" name="no_wp" class="form-control" id="no_wp" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->tahun}}" name="tahun" class="form-control" id="tahun" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="rom_hauling" class="col-sm-2 col-form-label">rom hauling</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->rom_hauling}}" name="rom_hauling" class="form-control" id="rom_hauling" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="distance" class="col-sm-2 col-form-label">jarak tempuh</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->distance}}" name="distance" class="form-control" id="distance" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="alat_berat_id" class="col-sm-2 col-form-label">kendaraan</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="alat_berat_id" id="alat_berat_id" required>
                                                            @foreach($data_alat as $d)
                                                            <option value="{{$d->id}}">{{$d->merk}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="max_load" class="col-sm-2 col-form-label">kapaistas penuh kendaraan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->max_load}}" name="max_load" class="form-control" id="max_load" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cycle_time" class="col-sm-2 col-form-label">waktu pengolahan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->cycle_time}}" name="cycle_time" class="form-control" id="cycle_time" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cap" class="col-sm-2 col-form-label">kapasitas</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->cap}}" name="cap" class="form-control" id="cap" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="dt_need" class="col-sm-2 col-form-label">DT need</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->dt_need}}" name="dt_need" class="form-control" id="dt_need" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tambang_id" class="col-sm-2 col-form-label">Kode Pertambangan : </label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="tambang_id" id="tambang_id" required>
                                                            @foreach($data_tambang as $d)
                                                            <option value="{{$d->id}}">{{$d->id}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
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