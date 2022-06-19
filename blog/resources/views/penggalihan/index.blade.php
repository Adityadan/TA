@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Kegiatan Penggalihan Bijih
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Penggalihan Bijih</a>
        </li>
    </ul>
</div>
<div class="row stats-overview-cont">
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    TOTAL Brutto
                </div>
                <div class="numbers">
                    {{$total_brutto}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    Recovery Penambangan
                </div>
                <div class="numbers">
                    {{$maxrecovery}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    total nett tonase
                </div>
                <div class="numbers">
                    {{$total_nett}}
                </div>
            </div>
        </div>
    </div>
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
                        Tambah Data penggalihan bijih
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2>Data Penggalihan Bijih</h2>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>rencana tahun</th>
                                <th>realisasi tahun</th>
                                <th>lokasi</th>
                                <th>blok</th>
                                <th>pit</th>
                                <th>cut of grade Ni</th>
                                <th>bulan</th>
                                <th>total brutto</th>
                                <th>recovery penambangan</th>
                                <th>total nett</th>
                                <th>kode tambang</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->rencana_tahun}}
                                </td>
                                <td>
                                    {{$d->realisasi_tahun}}
                                </td>
                                <td>
                                    {{$d->lokasi}}
                                </td>
                                <td>
                                    {{$d->blok}}
                                </td>
                                <td>
                                    {{$d->pit}}
                                </td>
                                <td>
                                    {{$d->cutofgrade_ni}}
                                </td>
                                <td>
                                    {{$d->bulan}}
                                </td>
                                <td>
                                    {{$d->total_brutto}}
                                </td>
                                <td>
                                    {{$d->recovery_pertambangan}}
                                </td>
                                <td>
                                    {{$d->total_nett}}
                                </td>
                                <td>
                                    {{$d->tambang_id}}
                                </td>
                                <!-- <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td> -->
                                
                                @can('delete-permission', $d)
                                <td>
                                    <a href="{{url('penggalihans/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                    <a href="#modaledit{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        edit modal
                                    </a>
                                    <br><br>
                                    <form method="POST" action="{{ url('penggalihans/'.$d->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
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
                                            <h4 class="modal-title">Detail proses Data penggalihan bijih {{ $d->id }}</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nomor pit</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->rencana_tahun }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nomor washing plant</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->realisasi_tahun }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">tahun</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->lokasi }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jarak</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->blok }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas maksimal</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->pit }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->cutofgrade_ni }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jarak tempuh</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->bulan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas maksimal</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->total_bulan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kapasitas</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->total_brutto }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->recovery_pertambangan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">DT need</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->total_nett }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">pertambangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tambang->nama }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="{{url('pengupasans/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Edit -->
                            <div class="modal fade" id="modaledit{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">form ubdah proses pengangkutan pit menuju washing plant</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('penggalihans.update',$d->id) }}">
                                                @csrf
                                                @method("PUT")
                                                <div class="form-group row">
                                                    <label for="RencanaTahun" class="col-sm-2 col-form-label">rencana tahun</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->rencana_tahun}}" name="RencanaTahun" class="form-control" id="RencanaTahun" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="RealisasiTahun" class="col-sm-2 col-form-label">realisasi tahun</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->realisasi_tahun}}" name="RealisasiTahun" class="form-control" id="RealisasiTahun" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Lokasi" class="col-sm-2 col-form-label">lokasi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->lokasi}}" name="Lokasi" class="form-control" id="Lokasi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Blok" class="col-sm-2 col-form-label">blok</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->blok}}" name="Blok" class="form-control" id="Blok" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Pit" class="col-sm-2 col-form-label">pit</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->pit}}" name="Pit" class="form-control" id="Pit" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="CutofgradeNi" class="col-sm-2 col-form-label">cut of grade Ni</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->cutofgrade_ni}}" name="CutofgradeNi" class="form-control" id="CutofgradeNi" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Bulan" class="col-sm-2 col-form-label">bulan</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="Bulan" id="Bulan" required>
                                                            <option value="januari">januari</option>
                                                            <option value="februari">februari</option>
                                                            <option value="maret">maret</option>
                                                            <option value="april">april</option>
                                                            <option value="mei">mei</option>
                                                            <option value="juni">juni</option>
                                                            <option value="juli">juli</option>
                                                            <option value="agustus">agustus</option>
                                                            <option value="september">september</option>
                                                            <option value="oktober">oktober</option>
                                                            <option value="november">november</option>
                                                            <option value="desember">desember</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Total_brutto" class="col-sm-2 col-form-label">total brutto</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->total_brutto}}" name="Total_brutto" class="form-control" id="Total_brutto" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Recovery_pertambangan" class="col-sm-2 col-form-label">recovery pertambangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->recovery_pertambangan}}" name="Recovery_pertambangan" class="form-control" id="Recovery_pertambangan" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Total_nett" class="col-sm-2 col-form-label">total nett</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->total_nett}}" name="Total_nett" class="form-control" id="Total_nett" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="Tambang_id" class="col-sm-2 col-form-label">Kode Pertambangan : </label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="Tambang_id" id="Tambang_id" required>
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
                                        <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-info">Save changes</button>
                                            </div> -->
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
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


<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah alat berat</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('penggalihans.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="RencanaTahun" class="col-sm-2 col-form-label">rencana tahun</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="RencanaTahun" class="form-control" id="RencanaTahun" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="RealisasiTahun" class="col-sm-2 col-form-label">realisasi tahun</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="RealisasiTahun" class="form-control" id="RealisasiTahun" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Lokasi" class="col-sm-2 col-form-label">lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Lokasi" class="form-control" id="Lokasi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Blok" class="col-sm-2 col-form-label">blok</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Blok" class="form-control" id="Blok" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Pit" class="col-sm-2 col-form-label">pit</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Pit" class="form-control" id="Pit" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CutofgradeNi" class="col-sm-2 col-form-label">cut of grade ni</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="CutofgradeNi" class="form-control" id="CutofgradeNi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Bulan" class="col-sm-2 col-form-label">bulan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Bulan" id="Bulan" required>
                                <option value="januari">januari</option>
                                <option value="februari">februari</option>
                                <option value="maret">maret</option>
                                <option value="april">april</option>
                                <option value="mei">mei</option>
                                <option value="juni">juni</option>
                                <option value="juli">juli</option>
                                <option value="agustus">agustus</option>
                                <option value="september">september</option>
                                <option value="oktober">oktober</option>
                                <option value="november">november</option>
                                <option value="desember">desember</option>
                            </select>
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
                    <div class="form-group row">
                        <label for="Total_nett" class="col-sm-2 col-form-label">total nett</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Total_nett" class="form-control" id="Total_nett" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tambang_id">Pertambangan : </label>
                        <select class="form-control" name="Tambang_id" id="Tambang_id" required>
                            @foreach($data_tambang as $d)
                            <option value="{{$d->id}}">{{$d->id}}</option>
                            @endforeach
                        </select>
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