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
        <form method="POST" action="{{ route('tambangs.store') }}">
            @csrf
            <div class="form-group row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Nama" class="form-control" id="Nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Lokasi" class="form-control" id="Lokasi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Target" class="col-sm-2 col-form-label">Target</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Target" class="form-control" id="Target" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select select class="form-control" name="Status" id="Status" required>
                        <option value="berlangsung">Berlangsung</option>
                        <option value="selesai">Selesai</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="Status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Status" class="form-control" id="Status" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Hasil_pertambangan" class="col-sm-2 col-form-label">Hasil Pertambangan</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Hasil_pertambangan" class="form-control" id="Hasil_pertambangan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Hari_tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" value="" name="Hari_tanggal" class="form-control" id="Hari_tanggal" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Kode_tp" class="col-sm-2 col-form-label">Kode TP</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Kode_tp" class="form-control" id="Kode_tp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Kordinat" class="col-sm-2 col-form-label">Koordinat daerah pertambangan</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Kordinat" class="form-control" id="Kordinat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="v" class="col-sm-2 col-form-label">Kemiringan</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Kemiringan" class="form-control" id="Kemiringan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Blok" class="col-sm-2 col-form-label">Blok</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Blok" class="form-control" id="Blok" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Cuaca" class="col-sm-2 col-form-label">Vuaca</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Cuaca" class="form-control" id="Cuaca" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Logger" class="col-sm-2 col-form-label">Logger</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Logger" class="form-control" id="Logger" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Digger" class="col-sm-2 col-form-label">Digger</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Digger" class="form-control" id="Digger" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Landowner" class="col-sm-2 col-form-label">Land Owner</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Landowner" class="form-control" id="Landowner">
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