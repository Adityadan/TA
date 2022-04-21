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
                    <a href="{{route('tambangs.create') }}" class="btn btn-primary">
                        + Tambah Data Kegiatan Pertambagan
                    </a>
                    <hr>
                    <p>
                    </p>
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
    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="portlet">
                <div class="portlet-title">
                    Peta riwayat lokasi pertambangan
                </div>
                <div class="portlet-body">
                    <div id="map"></div>
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

<script src="{{ asset('/sw.js') }}"></script>
	<script>
		if (!navigator.serviceWorker.controller) {
			navigator.serviceWorker.register("/sw.js").then(function(reg) {
				console.log("Service worker has been registered for scope: " + reg.scope);
			});
		}
	</script>
<script type="text/javascript">
    var map = L.map('map').setView([-1.5127367, 119.2098285], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([-6.6929291,106.8299996]).addTo(map);
    
    var lokasi = 

    for(var i=0; i<lokasi.lenght; i++){
        marker = new L.marker([lokasi[i][1],lokasi[i][2]],{icon:iconYellow})
        .bindPopup(lokasi[i][0])
        .addTo(map);
    }

</script>
@endsection