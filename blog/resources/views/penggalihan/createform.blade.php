@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah data penggalihan bijih bauksit
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah data penggalihan bijih bauksit</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah data penggalihan bijih bauksit
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('penggalihans.store') }}">
            @csrf
            <div class="form-group row">
                <label for="RencanaTahun" class="col-sm-2 col-form-label">rencana tahun</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="cf" class="form-control" id="cf" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="RealisasiTahun" class="col-sm-2 col-form-label">realisasi tahun</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Si02" class="form-control" id="Si02" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Lokasi" class="col-sm-2 col-form-label">lokasi</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Fe203" class="form-control" id="Fe203" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Blok" class="col-sm-2 col-form-label">blok</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Ti02" class="form-control" id="Ti02" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Pit" class="col-sm-2 col-form-label">pit</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Ai203" class="form-control" id="Ai203" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="CutofgradeNi" class="col-sm-2 col-form-label">cut of grade ni</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="CutofgradeNi" class="form-control" id="CutofgradeNi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Tanggal" class="col-sm-2 col-form-label">tanggal</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="CutofgradeNi" class="form-control" id="CutofgradeNi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Total" class="col-sm-2 col-form-label">total</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Total" class="form-control" id="Total" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Total_brutto" class="col-sm-2 col-form-label">total brutto</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Total_brutto" class="form-control" id="Total_brutto" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Recovery_pertambangan" class="col-sm-2 col-form-label">recovery pertambangan</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Recovery_pertambangan" class="form-control" id="Recovery_pertambangan" required>
                </div>
            </div>
            <div class="form-group">
                <label for="Tambang_id">Lokasi Pertambangan : </label>
                <select class="form-control" name="Tambang_id" id="Tambang_id" required>
                    @foreach($data as $d)
                    <option value="{{$d->id}}">{{$d->lokasi}}</option>
                    @endforeach
                </select>
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
