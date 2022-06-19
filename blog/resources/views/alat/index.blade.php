@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Alat Berat
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Alat Berat</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Alat Berat
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
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="#modalladd" class="btn btn-primary" data-toggle="modal">
                                    Tambah Data Alat Berat
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                        <tr>
                            <th>fungsi</th>
                            <th>merk</th>
                            <th>jenis</th>
                            <th>tipe</th>
                            <th>jumlah</th>
                            <th>Opsi Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>
                                {{$d->fungsi}}
                            </td>
                            <td>
                                {{$d->merk}}
                            </td>
                            <td>
                                {{$d->jenis}}
                            </td>
                            <td>
                                {{$d->tipe}}
                            </td>
                            <td>
                                {{$d->jumlah}}
                            </td>
                            @can('delete-permission', $d)
                            <td>
                                <a href="{{route('alats.edit',$d->id)}}" class="btn btn-warning">Edit</a>
                                <br><br>
                                <form method="POST" action="{{ url('alats/'.$d->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                </form>
                            </td>
                            @endcan
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
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