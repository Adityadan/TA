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
<div class="content">
    <div class="row">
        <div class="portlet">
            <div class="portlet-body">
                <button> Tambah Data Warga</button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>01927301927409128301</td>
                        <td>Aditya Rama Danial</td>
                        <td>Laki Laki</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
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