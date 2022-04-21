@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah data karyawan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah data karyawan</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah data karyawan
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('karyawans.store') }}">
            @csrf
            <div class="form-group row">
                <label for="NamaProduk" class="col-sm-2 col-form-label">nama</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Nama" class="form-control" id="Nama" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Stok" class="col-sm-2 col-form-label">devisi</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Devisi" class="form-control" id="Devisi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jobdesc" class="col-sm-2 col-form-label">jabatan</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Jabatan" class="form-control" id="Jabatan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="NamaProduk" class="col-sm-2 col-form-label">nik</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Nik" class="form-control" id="Nik" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" value="" name="Tanggallahir" class="form-control" id="Tanggallahir" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select select class="form-control" name="jeniskelamin" id="jeniskelamin" required>
                        <option value="laki">Laki Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="Stok" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="Alamat" class="form-control" id="Alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="HargaJual" class="col-sm-2 col-form-label">nomor telepon</label>
                <div class="col-sm-10">
                    <input type="text" value="" name="No_telp" class="form-control" id="No_telp" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="rencana_kegiatan_id" class="col-sm-2 col-form-label">Lokasi Alat Berat</label>
                <div class="col-sm-10">
                    <select class="form-control" name="rencana_kegiatan_id" id="rencana_kegiatan_id" required>
                        @foreach($data_rencana as $d)
                        <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                        @endforeach
                    </select>
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