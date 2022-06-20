@extends('layouts.conquer')

<!-- section menempel pada yield -->
@section('tempat_script')
<script>

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
        <li>

        </li>
    </ul>
</div>
<div class="row stats-overview-cont">
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('bauksits') }}">
                        <span class="title">
                            TOTAL BAUKSIT</span>
                    </a>
                </div>
                <div class="numbers">
                    {{$totalbauksit}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('alats') }}">
                        <span class="title">
                            TOTAL ALAT BERAT YANG DIGUNAKAN</span>
                    </a>
                </div>
                <div class="numbers">
                    {{$jumlah_alatberat}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('karyawans') }}">
                        <span class="title">
                            TOTAL KARYAWAN</span>
                    </a>
                    </li>
                </div>
                <div class="numbers">
                    {{$jumlah_karyawan}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('laporans') }}">
                        <span class="title">
                            LAPORAN KERUSAKAN</span>
                    </a>
                </div>
                <div class="numbers">
                    {{$jumlah_laporan}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('rencanas') }}">
                        <span class="title">
                            JUMLAH KEGIATAN PERTAMBANGAN</span>
                    </a>
                </div>
                <div class="numbers">
                    {{$jumlah_kegiatan}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div class="stats-overview stat-block">
            <div class="details">
                <div class="title">
                    <a href="{{ url('pengupasans') }}">
                        <span class="title">
                            TOTAL OVERBURDEN</span>
                    </a>
                </div>
                <div class="numbers">
                    {{$jumlah_totalOB}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection