@extends('layouts.conquer')

@section('tempat_konten')
<h3 class="page-title">
    tambah data bauksit
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">tambah data bauksit</a>
        </li>
    </ul>
</div>
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-cogs"></i>form tambah data bauksit
        </div>
        <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#portlet-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body">
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
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
