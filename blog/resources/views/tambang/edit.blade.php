@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah data Pertambangan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah data Pertambangan</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah data Pertambangan
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('tambangs.update',$data->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->	nama}}" name="Nama" class="form-control" id="Nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->lokasi}}" name="Lokasi" class="form-control" id="Lokasi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Target" class="col-sm-2 col-form-label">Target</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->target}}" name="Target" class="form-control" id="Target" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->status}}" name="Status" class="form-control" id="Status" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Hasil_pertambangan" class="col-sm-2 col-form-label">Hasil Pertambangan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->hasil_pertambangan}}" name="Hasil_pertambangan" class="form-control" id="Hasil_pertambangan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Hari_tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" value="{{$data->hari_tanggal}}" name="Hari_tanggal" class="form-control" id="Hari_tanggal" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Kode_tp" class="col-sm-2 col-form-label">Kode TP</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->kode_tp}}" name="Kode_tp" class="form-control" id="Kode_tp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Kordinat" class="col-sm-2 col-form-label">kordinat daerah pertambangan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->kordinat}}" name="Kordinat" class="form-control" id="Kordinat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="v" class="col-sm-2 col-form-label">kemiringan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->kemiringan}}" name="Kemiringan" class="form-control" id="Kemiringan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Blok" class="col-sm-2 col-form-label">blok</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->blok}}" name="Blok" class="form-control" id="Blok" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Cuaca" class="col-sm-2 col-form-label">cuaca</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->cuaca}}" name="Cuaca" class="form-control" id="Cuaca" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Logger" class="col-sm-2 col-form-label">logger</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->logger}}" name="Logger" class="form-control" id="Logger" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Digger" class="col-sm-2 col-form-label">digger</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->digger}}" name="Digger" class="form-control" id="Digger" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Landowner" class="col-sm-2 col-form-label">land owner</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$data->landowner}}" name="Landowner" class="form-control" id="Landowner" required>
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