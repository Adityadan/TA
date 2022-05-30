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
        @foreach($data as $d)
        ["{{$d->nama}}",{{$d->kordinat}}],
        @endforeach
      ['Tambang A', 0.3176578, 110.1059246],
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