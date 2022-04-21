@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    Edit data Bauksit
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">edit data Bauksit</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>Edit data Bauksit
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
        <form method="POST" action="{{ route('bauksits.update',$data->id) }}">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label for="cf" class="col-sm-2 col-form-label">kandungan cf pada bauksit</label>
                <div class="col-sm-10">
                    <input type="text" name="cf" class="form-control" id="cf" value="{{$data->cf}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="si02" class="col-sm-2 col-form-label">kandungan si02 pada bauksit</label>
                <div class="col-sm-10">
                    <input type="text" name="si02" class="form-control" id="si02" value="{{$data->si02}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="fe203" class="col-sm-2 col-form-label">kandungan fe203 pada bauksit</label>
                <div class="col-sm-10">
                    <input type="text" name="fe203" class="form-control" id="fe203" value="{{$data->fe203}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ti02" class="col-sm-2 col-form-label">kandungan ti02 pada bauksit</label>
                <div class="col-sm-10">
                    <input type="text" name="ti02" class="form-control" id="ti02" value="{{$data->ti02}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ai203" class="col-sm-2 col-form-label">kandungan ai203 pada bauksit</label>
                <div class="col-sm-10">
                    <input type="text" name="ai203" class="form-control" id="ai203" value="{{$data->ai203}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ratarata_tebal_ore" class="col-sm-2 col-form-label">rata rata tebal ore </label>
                <div class="col-sm-10">
                    <input type="text" name="ratarata_tebal_ore" class="form-control" id="ratarata_tebal_ore" value="{{$data->ratarata_tebal_ore}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="ratarata_tebal_ob" class="col-sm-2 col-form-label">rata rata tebal overburden</label>
                <div class="col-sm-10">
                    <input type="text" name="ratarata_tebal_ob" class="form-control" id="ratarata_tebal_ob" value="{{$data->ratarata_tebal_ob}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="resources" class="col-sm-2 col-form-label">total bauksit yang didapat</label>
                <div class="col-sm-10">
                    <input type="text" name="resources" class="form-control" id="resources" value="{{$data->resources}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="total_ob" class="col-sm-2 col-form-label">total overburden</label>
                <div class="col-sm-10">
                    <input type="text" name="total_ob" class="form-control" id="total_ob" value="{{$data->total_ob}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="luas_area" class="col-sm-2 col-form-label">luas area</label>
                <div class="col-sm-10">
                    <input type="text" name="luas_area" class="form-control" id="luas_area" value="{{$data->luas_area}}" required>
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
</div>
@endsection