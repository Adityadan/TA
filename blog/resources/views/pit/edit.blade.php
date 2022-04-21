@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah alat berat
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah alat berat</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah alat berat
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('pits.update',$data->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="no_pit" class="col-sm-2 col-form-label">nomor pit</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->no_pit}}" name="no_pit" class="form-control" id="no_pit" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_wp" class="col-sm-2 col-form-label">nomor washing plant</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->no_wp}}" name="no_wp" class="form-control" id="no_wp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tahun" class="col-sm-2 col-form-label">tahun</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->tahun}}" name="tahun" class="form-control" id="tahun" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="rom_hauling" class="col-sm-2 col-form-label">rom hauling</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->rom_hauling}}" name="rom_hauling" class="form-control" id="rom_hauling" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="distance" class="col-sm-2 col-form-label">jarak tempuh</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->distance}}" name="distance" class="form-control" id="distance" required>
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
                    <input type="text" value="{{$data->max_load}}" name="max_load" class="form-control" id="max_load" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cycle_time" class="col-sm-2 col-form-label">waktu pengolahan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->cycle_time}}" name="cycle_time" class="form-control" id="cycle_time" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="cap" class="col-sm-2 col-form-label">kapasitas</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->cap}}" name="cap" class="form-control" id="cap" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="dt_need" class="col-sm-2 col-form-label">DT need</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->dt_need}}" name="dt_need" class="form-control" id="dt_need" required>
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
</div>
@endsection
