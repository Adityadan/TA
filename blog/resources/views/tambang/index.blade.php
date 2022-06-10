@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Kegiatan Pertambangan
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Kegiatan Pertambagan</a>
        </li>
    </ul>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <h2>Data Kegiatan Pertambagan</h2>
                    </div>
                </div>
                <div class="portlet-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="#modalladd" class="btn btn-primary" data-toggle="modal">
                                        Tambah Data Pertambangan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>nama pertambangan</th>
                                <th>lokasi</th>
                                <th>status</th>
                                <th>Tanggal</th>
                                <th>Detail Data</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->nama}}
                                </td>
                                <td>
                                    {{$d->lokasi}}
                                </td>
                                <td>
                                    {{$d->status}}
                                </td>
                                <td>
                                    {{$d->hari_tanggal}}
                                </td>
                                <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('tambangs/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                    <br><br>
                                    <form method="POST" action="{{ url('tambangs/'.$d->id)}}">
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
                                            <h4 class="modal-title">Detail tambang {{ $d->id }}</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">nama</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->nama }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">lokasi</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->lokasi }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">target</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->target }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">status</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->status }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Hasil pertambangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->hasil_pertambangan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">hari tanggal</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->hari_tanggal }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kode tp</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->kode_tp }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kordinat</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->kordinat }}</label>
                                                    </div>
                                                    <div class="mapouter">
                                                        <div class="gmap_canvas">
                                                            <iframe class="form-group" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $d->kordinat }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                            </iframe><a href="https://123movies-to.org"></a><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">kemiringan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->kemiringan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">blok</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->blok }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">cuaca</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->cuaca }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">logger</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->logger }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">digger</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->digger }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <a href="{{url('tambangs/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
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
        <div class="col-md-12">
            <!-- BEGIN MARKERS PORTLET-->
            <div class="portlet yellow">
                <div class="portlet-title">
                    <div class="caption">
                        Riwayat Lokasi Pertambangan
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="container mt-5">
                        <div id="map" style="width: 800px; height: 400px;"></div>
                    </div>
                </div>
            </div>
            <!-- END MARKERS PORTLET-->
        </div>
    </div>
</div>

<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah alat berat</h4>
            </div>
            <div class="modal-body">
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
                        <label for="Kordinat" class="col-sm-2 col-form-label">kordinat daerah pertambangan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Kordinat" class="form-control" id="Kordinat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="v" class="col-sm-2 col-form-label">kemiringan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Kemiringan" class="form-control" id="Kemiringan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Blok" class="col-sm-2 col-form-label">blok</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Blok" class="form-control" id="Blok" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Cuaca" class="col-sm-2 col-form-label">cuaca</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Cuaca" class="form-control" id="Cuaca" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Logger" class="col-sm-2 col-form-label">logger</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Logger" class="form-control" id="Logger" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Digger" class="col-sm-2 col-form-label">digger</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Digger" class="form-control" id="Digger" required>
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

    @endsection

    @section('tempat_script')
    <script>
        jQuery(document).ready(function() {
            App.init();
            TableManaged.init();
        });
    </script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            MapsGoogle.init();
        });
    </script>

    <script type="text/javascript">
        var locations = [
            @foreach($data as $d)["{{$d->nama}}", {
                {
                    $d - > kordinat
                }
            }],
            @endforeach['Tambang A', 0.3176578, 110.1059246],
            ['Tambang B', 0.3272706, 110.0156307],
            ['Tambang C', 0.3000198, 109.8166752],
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(0.9619, 114.5548),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>

    @endsection