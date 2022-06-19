@extends('layouts.conquer')

@section('tempat_konten')
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
                    <a href="#modalladd" class="btn btn-primary" data-toggle="modal">
                        Tambah Data Karyawan
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2>Data Karyawan</h2>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>nama</th>
                                <th>devisi</th>
                                <th>jabatan</th>
                                <th>Detail Data</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->id}}
                                </td>
                                <td>
                                    {{$d->nama}}
                                </td>
                                <td>
                                    {{$d->devisi}}
                                </td>
                                <td>
                                    {{$d->jabatan}}
                                </td>
                                <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('karyawans.edit',$d->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="#modaledit{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        edit modal
                                    </a>
                                    <br><br>
                                    <form method="POST" action="{{ url('karyawans/'.$d->id)}}">
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
                                            <h4 class="modal-title">Detail Karyawan {{ $d->nama }}</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nama</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->nama }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">devisi</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->devisi }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Jabatan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->jabatan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">NIK</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->	nik }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">tanggal lahir karyawan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tanggallahir }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jenis kelamin</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->jeniskelamin }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">alamat</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alamat }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nomor telefon</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->no_telp }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kode pertambangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tambang->id }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Kegiatan Pertambangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->rencana_kegiatan->id }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="{{url('karyawans/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <!-- modal edit -->
                            <div class="modal fade" id="modaledit{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">form Data Karyawan
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('karyawans.update',$d->id) }}">
                                                @csrf
                                                @method("PUT")
                                                <div class="form-group row">
                                                    <label for="Nama" class="col-sm-2 col-form-label">nama</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->nama}}" name="Nama" class="form-control" id="Nama" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Devisi" class="col-sm-2 col-form-label">devisi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->devisi}}" name="Devisi" class="form-control" id="Devisi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Jabatan" class="col-sm-2 col-form-label">jabatan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->jabatan}}" name="Jabatan" class="form-control" id="Jabatan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Nik" class="col-sm-2 col-form-label">nik</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->nik}}" name="Nik" class="form-control" id="Nik" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" value="{{$d->tanggallahir}}" name="Tanggallahir" class="form-control" id="Tanggallahir" required>
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
                                                    <label for="Alamat" class="col-sm-2 col-form-label">alamat</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->alamat}}" name="Alamat" class="form-control" id="Alamat" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="No_telp" class="col-sm-2 col-form-label">nomor telepon</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->no_telp}}" name="No_telp" class="form-control" id="No_telp" required>
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
                                                    <label for="rencana_kegiatan_id" class="col-sm-2 col-form-label">Kegiatan Pertambangan</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="rencana_kegiatan_id" id="rencana_kegiatan_id" required>
                                                            @foreach($data_rencana as $d)
                                                            <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
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

<!-- Modal Add -->
<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah alat berat</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('karyawans.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="Nama" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Nama" class="form-control" id="Nama" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Devisi" class="col-sm-2 col-form-label">devisi</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Devisi" class="form-control" id="Devisi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jabatan" class="col-sm-2 col-form-label">jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Jabatan" class="form-control" id="Jabatan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Nik" class="form-control" id="Nik" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tanggallahir" class="col-sm-2 col-form-label">tanggal lahir</label>
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
                        <label for="Alamat" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Alamat" class="form-control" id="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="No_telp" class="col-sm-2 col-form-label">no telepon</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="No_telp" class="form-control" id="No_telp" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rencana_kegiatan_id" class="col-sm-2 col-form-label">kegiatan pertambangan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="rencana_kegiatan_id" id="rencana_kegiatan_id" required>
                                @foreach($data_rencana as $d)
                                <option value="{{$d->id}}">{{$d->nama_kegiatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tambang_id" id="tambang_id" required>
                                @foreach($data_tambang as $d)
                                <option value="{{$d->id}}">{{$d->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

@endsection

@section('tempat_script')
<script>
    jQuery(document).ready(function() {
        App.init();
        TableManaged.init();
    });
</script>
@endsection