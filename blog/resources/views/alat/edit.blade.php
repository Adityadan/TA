@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Edit data alat berat
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">edit data alat berat</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Edit data alat berat
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('alats.update',$data->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="fungsi" class="col-sm-2 col-form-label">fungsi alat</label>
                <div class="col-sm-10">
                    <input type="text" name="fungsi" class="form-control" id="fungsi" value="{{$data->fungsi}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="merk" class="col-sm-2 col-form-label">merk alat</label>
                <div class="col-sm-10">
                    <input type="text" name="merk" class="form-control" id="merk" value="{{$data->merk}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-2 col-form-label">jenis alat</label>
                <div class="col-sm-10">
                    <input type="text" name="jenis" class="form-control" id="jenis" value="{{$data->jenis}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tipe" class="col-sm-2 col-form-label">tipe alat</label>
                <div class="col-sm-10">
                    <input type="text" name="tipe" class="form-control" id="tipe" value="{{$data->tipe}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-2 col-form-label">jumlah alat</label>
                <div class="col-sm-10">
                    <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$data->jumlah}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tambang_id" class="col-sm-2 col-form-label">Lokasi Pertambangan : </label>
                <div class="col-sm-10">
                    <select class="form-control" name="tambang_id" id="tambang_id" required>
                        @foreach($data_tambang as $d)
                        <option value="{{$d->id}}">{{$d->nama}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="rencana_kegiatan_id" class="col-sm-2 col-form-label">Lokasi Alat Berat</label>
                <div class="col-sm-10">
                    <select class="form-control" name="rencana_kegiatan_id" id="rencana_kegiatan_id" required>
                        @foreach($data_rencana as $d)
                        <option value="{{$d->id}}">{{$d->kegiatan}}</option>
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