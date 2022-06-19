@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Laporan Kerusakan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a>Laporan Kerusakan</a>
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
                        Tambah Data Laporan Kerusakan
                    </a>
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2> Data Laporan Kerusakan</h2>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>Pelapor</th>
                                <th>Tingkat Kerusakan</th>
                                <th>Prioritas Perbaikan</th>
                                <th>Presentasi Kinerja</th>
                                <th>Ringkasan Kerusakan</th>
                                <th>Detail Data</th>
                                <th>Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_laporan as $d)
                            <tr>
                                <td>
                                    {{$d->users->id}}
                                </td>
                                <td>
                                    {{$d->kerusakan}}
                                </td>
                                <td>
                                    {{$d->prioritas}}
                                </td>
                                <td>
                                    {{$d->kinerja}}
                                </td>
                                <td>
                                    {{$d->ringkasan}}
                                </td>
                                <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td>
                                @can('delete-permission', $d)
                                <td>
                                    <form method="POST" action="{{ url('laporans/'.$d->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Selesai" class="btn btn-success" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                    </form>
                                </td>
                                @endcan
                            </tr>

                            <!-- Modal Detail -->
                            <div id="modalDetail_{{ $d->id }}" class="modal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">Detail Laporan Kerusakan {{ $d->id }}</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Pelapor</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->users->id}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kerusakan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->kerusakan}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">prioritas</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->prioritas}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Presentasi Kinerja</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->kinerja}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Ringkasan Kerusakan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->ringkasan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Deskripsi Kerusakan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->deskripsi}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <h4 class="modal-title">form tambah laporan kerusakan</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('laporans.store') }}">
                    @csrf
                    @if (Auth::user())
                    <div class="form-group row">
                        <label for="users_id" class="col-sm-2 col-form-label">pelapor</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{Auth::user()->id}}" name="users_id" class="form-control" id="users_id">
                        </div>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="kerusakan" class="col-sm-2 col-form-label">Tingkat Kerusakan</label>
                        <div class="col-sm-10">
                            <select select class="form-control" name="kerusakan" id="kerusakan" required>
                                <option value="kritis">kritis</option>
                                <option value="besar">besar</option>
                                <option value="sedang">sedang</option>
                                <option value="kecil">kecil</option>
                                <option value="kosmetik">kosmetik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prioritas" class="col-sm-2 col-form-label">Prioritas Perbaikan</label>
                        <div class="col-sm-10">
                            <select select class="form-control" name="prioritas" id="prioritas" required>
                                <option value="rendah">rendah</option>
                                <option value="besar">besar</option>
                                <option value="tinggi">tinggi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kinerja" class="col-sm-2 col-form-label">Presentase Kinerja</label>
                        <div class="col-sm-10">
                            <select select class="form-control" name="kinerja" id="kinerja" required>
                                <option value="10">10%</option>
                                <option value="25">25%</option>
                                <option value="50">50%</option>
                                <option value="75">75%</option>
                                <option value="100">100%</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ringkasan" class="col-sm-2 col-form-label">ringkasan kerusakan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="ringkasan" class="form-control" id="ringkasan" required>
                        </div>
                    </div>
                    <div class="form-ringkasan row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi kerusakan</label>
                        <div class="col-sm-10">

                            <textarea  value="" name="deskripsi" class="form-control" id="deskripsi"rows="3"></textarea>
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