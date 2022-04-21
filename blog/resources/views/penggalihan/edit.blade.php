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
        <form method="POST" action="{{ route('alats.store') }}">
            @csrf
            <div class="form-group row">
                <label for="NamaProduk" class="col-sm-2 col-form-label">fungsi alat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Fungsi" class="form-control" id="Fungsi" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Stok" class="col-sm-2 col-form-label">merk alat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Merk" class="form-control" id="Merk" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="HargaJual" class="col-sm-2 col-form-label">jenis alat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Jenis" class="form-control" id="Jenis" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="HargaJual" class="col-sm-2 col-form-label">tipe alat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Tipe" class="form-control" id="Tipe" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="HargaProduksi" class="col-sm-2 col-form-label">jumlah alat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Jumlah" class="form-control" id="Jumlah" required>
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
