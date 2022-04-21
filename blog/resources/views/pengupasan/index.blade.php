@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Kegiatan Pengupasan Tanah Pucuk
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Kegiatan Pengupasan Tanah Pucuk</a>
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
                    <a href="#modalladd" class="btn btn-primary" data-toggle="modal">
                        Tambah Data pengupasan tanah pucuk
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2>Data Kegiatan Pengupasan Tanah Pucuk</h2>
                    <table class="table table-striped table-bordered table-hover table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>tahun_rencana</th>
                                <th>tahun_realisasi</th>
                                <th>lokasi</th>
                                <th>bulan</th>
                                <th>Detail Data</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->tahun_rencana}}
                                </td>
                                <td>
                                    {{$d->tahun_realisasi}}
                                </td>
                                <td>
                                    {{$d->lokasi}}
                                </td>
                                <td>
                                    {{$d->bulan}}
                                </td>
                                <td>
                                    <a href="#modalDetail_{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        Detail
                                    </a>
                                </td>
                                <td>
                                    <a href="{{url('pengupasans/'.$d->id.'/edit')}}" class="btn btn-warning">edit</a>
                                    <br><br>
                                    <form method="POST" action="{{ url('pengupasans/'.$d->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal Detail -->
                            <div class="modal fade" id="modalDetail_{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">form tambah pengupasan tanah pucuk</h4>
                                        </div>
                                        <form action="#" class="form-horizontal form-bordered form-row-stripped">
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">tahun rencana</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tahun_rencana }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">tahun realisasi</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->tahun_realisasi }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">lokasi</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->lokasi }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">bulan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->bulan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jumlah bcm</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->jumlah_bcm }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jumlah ton</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->jumlah_ton }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">berat jenis material</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->berat_jenis_material }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">total</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->total }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">keterangan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->keteragan }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jumlah alat gali muat</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_gali_muat }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jumlah alah dorong</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_dorong }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">jumlah alat bongkar</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_bongkar }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">alat angkut</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->alat_angkut }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">satuan</label>
                                                    <div class="col-md-3">
                                                        <label>{{ $d->satuan }}</label>
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


<!-- modal add -->
<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah pengupasan tanah pucuk</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('pengupasans.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="TahunRencana" class="col-sm-2 col-form-label">tahun rencana</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="TahunRencana" class="form-control" id="TahunRencana" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="TahunRealisasi" class="col-sm-2 col-form-label">tahun realisasi</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="TahunRealisasi" class="form-control" id="TahunRealisasi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Lokasi" class="col-sm-2 col-form-label">lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Lokasi" class="form-control" id="Lokasi" required>
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
                        <label for="JumlahBcm" class="col-sm-2 col-form-label">jumlah bcm</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="JumlahBcm" class="form-control" id="JumlahBcm" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="JumlahTon" class="col-sm-2 col-form-label">jumlah ton</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="JumlahTon" class="form-control" id="JumlahTon" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="BeratJenisMaterial" class="col-sm-2 col-form-label">berat jenis material</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="BeratJenisMaterial" class="form-control" id="BeratJenisMaterial" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Total" class="col-sm-2 col-form-label">total</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Total" class="form-control" id="Total" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Keteragan" class="col-sm-2 col-form-label">keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Keteragan" class="form-control" id="Keteragan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="AlatGaliMuat" class="col-sm-2 col-form-label">jumlah alat gali muat</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="AlatGaliMuat" class="form-control" id="AlatGaliMuat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="AlatDorong" class="col-sm-2 col-form-label">jumlah alat dorong</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="AlatDorong" class="form-control" id="AlatDorong" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="AlatBongkar" class="col-sm-2 col-form-label">jumlah alat bongkar</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="AlatBongkar" class="form-control" id="AlatBongkar" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="AlatAngkut" class="col-sm-2 col-form-label">jumlah alat angkut</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="AlatAngkut" class="form-control" id="AlatAngkut" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="JarakAngkut" class="col-sm-2 col-form-label">jarak angkut</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="JarakAngkut" class="form-control" id="JarakAngkut" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Satuan" class="col-sm-2 col-form-label">satuan</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Satuan" class="form-control" id="Satuan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="Tambang_id" id="Tambang_id" required>
                                @foreach($data_tambang as $d)
                                <option value="{{$d->id}}">{{$d->nama}}</option>
                                @endforeach
                            </select>
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
@endsection

@section('tempat_script')
<script>
    jQuery(document).ready(function() {
        App.init();
        TableManaged.init();
    });
</script>
@endsection