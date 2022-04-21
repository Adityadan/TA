@extends('layouts.conquer')
<h3 class="page-title">
    Daftar Karyawan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Karyawan</a>
        </li>
    </ul>
</div>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">
        Detail Karyawan {{ $karyawan->nama }}
    </h4>
</div>
<div class="modal-body">
    <hr>
    Nama = {{ $karyawan->nama_produk }}
    <table border="1" style="width: 70%;">
        <tr>
            <th>Data</th>
            <th>Karyawan</th>
        </tr>
        <tr>
            <td>ID</td>
            <td>{{ $karyawan->id }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $karyawan->nama }}</td>
        </tr>
        <tr>
            <td>devisi</td>
            <td>{{ $karyawan->devisi }}</td>
        </tr>
        <tr>
            <td>jabatan</td>
            <td>{{ $karyawan->jabatan }}</td>
        </tr>
        <tr>
            <td>nik</td>
            <td>{{ $karyawan->nik }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>{{ $karyawan->tanggallahir }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>{{ $karyawan->jeniskelamin }}</td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>{{ $karyawan->alamat }}</td>
        </tr>
        <tr>
            <td>nomor telepon</td>
            <td>{{ $karyawan->no_telp }}</td>
        </tr>
        <tr>
            <td>Kegiatan Karyawan</td>
            <td>{{ $karyawan->rencana_kegiatan->nama_kegiatan }}</td>
        </tr>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
@section('tempat_konten')
@endsection