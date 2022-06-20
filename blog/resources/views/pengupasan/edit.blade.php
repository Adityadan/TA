@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah alat berat
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah alat berat</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah alat berat
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('pengupasans.update',$data->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="TahunRencana" class="col-sm-2 col-form-label">Tahun Rencana</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->tahun_rencana}}" name="TahunRencana" class="form-control" id="TahunRencana" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="TahunRealisasi" class="col-sm-2 col-form-label">Realisasi Tahun</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->tahun_realisasi}}" name="TahunRealisasi" class="form-control" id="TahunRealisasi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->lokasi}}" name="Lokasi" class="form-control" id="Lokasi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Bulan" class="col-sm-2 col-form-label">Bulan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="Bulan" id="Bulan" required>
                        <option value="{{$d->bulan}}">{{$d->bulan}}</option>
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
                <div class="form-group row">
                    <label for="JumlahBcm" class="col-sm-2 col-form-label">Jumlah BCM</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$d->jumlah_bcm}}" name="JumlahBcm" class="form-control" id="JumlahBcm" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JumlahTon" class="col-sm-2 col-form-label">Jumlah Ton</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$d->jumlah_ton}}" name="JumlahTon" class="form-control" id="JumlahTon" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="BeratJenisMaterial" class="col-sm-2 col-form-label">Berat Jenis Material</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$d->berat_jenis_material}}" name="BeratJenisMaterial" class="form-control" id="BeratJenisMaterial" required>
                    </div>
                </div>>
            </div>
            <div class="form-group row">
                <label for="Keteragan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->keteragan}}" name="Keteragan" class="form-control" id="Keteragan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="AlatGaliMuat" class="col-sm-2 col-form-label">Alat Gali Muat</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->alat_gali_muat}}" name="AlatGaliMuat" class="form-control" id="AlatGaliMuat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="AlatDorong" class="col-sm-2 col-form-label">Alat Dorong</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->alat_dorong}}" name="AlatDorong" class="form-control" id="AlatDorong" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="AlatBongkar" class="col-sm-2 col-form-label">Alat Bongkar</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->alat_bongkar}}" name="AlatBongkar" class="form-control" id="AlatBongkar" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="AlatAngkut" class="col-sm-2 col-form-label">Alat Angkut</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->alat_angkut}}" name="AlatAngkut" class="form-control" id="AlatAngkut" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="JarakAngkut" class="col-sm-2 col-form-label">Jarak Angkut</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->jarak_angkut}}" name="JarakAngkut" class="form-control" id="JarakAngkut" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$d->satuan}}" name="Satuan" class="form-control" id="Satuan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
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
</div>
@endsection