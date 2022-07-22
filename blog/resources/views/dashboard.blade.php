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


@endsection

@section('tempat_script')
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   App.init();
});
</script>
@endsection