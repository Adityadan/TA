@extends('layouts.conquer')

<!-- section menempel pada yield -->
@section('tempat_script')
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
@endsection

@section('tempat_konten')
<h3 class="page-title">
    Selamat Datang
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Dashboard</a>
        </li>

    </ul>
</div>
<div class="row">
    @if($alert!="kosong")
    <div class="alert alert-warning">
        {{$alert}}
    </div>
    @endif

    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Kegiatan Yang Mendekati Deadline
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Nama Kegiatan
                            </th>
                            <th>
                                Tanggal Mulai
                            </th>
                            <th>
                                Tanggal Akhir
                            </th>
                            <th>
                                Presentase
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($deadline as $d)
                        <tr>
                            <td>
                            {{$d->id }}
                            </td>
                            <td>
                            {{$d->kegiatan }}
                            </td>
                            <td>
                            {{$d->mulai }}
                            </td>
                            <td>
                            {{$d->akhir }}
                            </td>
                            <td>
                            {{$d->presentase }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('tempat_script')
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
});
</script>
@endsection