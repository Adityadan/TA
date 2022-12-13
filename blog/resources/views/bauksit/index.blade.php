@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Daftar Bauksit
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Data Bauksit</a>
        </li>
    </ul>
</div>
<form enctype="multipart/form-data" method="GET" action="{{ route('bauksit.filter') }}">
    @csrf
    <div class="form-group row">
        <label for="tambang_id" class="col-sm-2 col-form-label">Tambang ID</label>
        <div class="col-sm-10">
            <select class="form-control" name="tambang_id" id="tambang_id">
                @foreach($data_tambang as $d)
                <option value="{{$d->id}}">
                    {{$d->nama}}
                </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
            Tampilkan
        </button>
    </div>
</form>
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
                        Tambah Data Bauksit
                    </a>
                    <hr>
                    <p>
                    </p>
                    <h2>Data Bauksit</h2>
                    <table id="" class="table table-bordered table-striped table-earning dataTable">
                        <thead>
                            <tr>
                                <th>cf</th>
                                <th>si02</th>
                                <th>fe203</th>
                                <th>ti02</th>
                                <th>ai203</th>
                                <th>Opsi Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>
                                    {{$d->cf}}
                                </td>
                                <td>
                                    {{$d->si02}}
                                </td>
                                <td>
                                    {{$d->fe203}}
                                </td>
                                <td>
                                    {{$d->ti02}}
                                </td>
                                <td>
                                    {{$d->ai203}}
                                </td>
                                <td>
                                    <a href="#modaledit{{ $d->id }}" class="btn btn-info" data-toggle="modal">
                                        edit
                                    </a>
                                    <br><br>
                                    <form method="POST" action="{{ url('bauksits/'.$d->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btx-xs" onclick="if(!confirm('apakah anda yakin?'))
                                    return false;" />
                                    </form>
                                </td>
                            </tr>
                            <!-- Modal Edit -->
                            <div class="modal fade" id="modaledit{{ $d->id }}" tabindex="-1" role="basic" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                            <h4 class="modal-title">form ubdah Data Bauksit</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('bauksits.update',$d->id) }}">
                                                @csrf
                                                @method("PUT")
                                                <div class="form-group row">
                                                    <label for="cf" class="col-sm-2 col-form-label">unsur CF</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->cf}}" name="cf" class="form-control" id="cf" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="si02" class="col-sm-2 col-form-label">unsur SiO2</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->si02}}" name="si02" class="form-control" id="si02" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="fe203" class="col-sm-2 col-form-label">unsur Fe2O3</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->fe203}}" name="fe203" class="form-control" id="fe203" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ti02" class="col-sm-2 col-form-label">unsur TiO2</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->ti02}}" name="ti02" class="form-control" id="ti02" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ai203" class="col-sm-2 col-form-label">unsur Al2O3 </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->ai203}}" name="ai203" class="form-control" id="ai203" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ratarata_tebal_ore" class="col-sm-2 col-form-label">rata rata ketebalan ore</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->ratarata_tebal_ore}}" name="ratarata_tebal_ore" class="form-control" id="ratarata_tebal_ore" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ratarata_tebal_ob" class="col-sm-2 col-form-label">rata rata tebal overburden</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->ratarata_tebal_ob}}" name="ratarata_tebal_ob" class="form-control" id="ratarata_tebal_ob" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="resources" class="col-sm-2 col-form-label">total resources</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->resources}}" name="resources" class="form-control" id="resources" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="total_ob" class="col-sm-2 col-form-label">total overburden</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->total_ob}}" name="total_ob" class="form-control" id="total_ob" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="luas_area" class="col-sm-2 col-form-label">luas area</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" value="{{$d->luas_area}}" name="luas_area" class="form-control" id="luas_area" required>
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

<!-- Modal Add -->
<div class="modal fade" id="modalladd" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">form tambah Data Bauksit</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('bauksits.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="Cf" class="col-sm-2 col-form-label">cf</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="cf" class="form-control" id="cf" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Si02" class="col-sm-2 col-form-label">si02</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Si02" class="form-control" id="Si02" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Fe203" class="col-sm-2 col-form-label">fe203</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Fe203" class="form-control" id="Fe203" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ti02" class="col-sm-2 col-form-label">ti02</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Ti02" class="form-control" id="Ti02" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ai203" class="col-sm-2 col-form-label">ai203</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Ai203" class="form-control" id="Ai203" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ratarata_tebal_ore" class="col-sm-2 col-form-label">ratarata tebal ore</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Ratarata_tebal_ore" class="form-control" id="Ratarata_tebal_ore" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Ratarata_tebal_ob" class="col-sm-2 col-form-label">ratarata tebal ob</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Ratarata_tebal_ob" class="form-control" id="Ratarata_tebal_ob" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Resources" class="col-sm-2 col-form-label">resources</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Resources" class="form-control" id="Resources" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Total_ob" class="col-sm-2 col-form-label">total ob</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Total_ob" class="form-control" id="Total_ob" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Luas_area" class="col-sm-2 col-form-label">luas area</label>
                        <div class="col-sm-10">
                            <input type="text" value="" name="Luas_area" class="form-control" id="Luas_area" required>
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