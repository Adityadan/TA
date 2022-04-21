@extends('layouts.conquer')

@section('tempat_konten')
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                Widget settings form goes here
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="theme-panel hidden-xs hidden-sm">
    <div class="toggler">
        <i class="fa fa-gear"></i>
    </div>
    <div class="theme-options">
        <div class="theme-option theme-colors clearfix">
            <span>
                Theme Color </span>
            <ul>
                <li class="color-black current color-default tooltips" data-style="default" data-original-title="Default">
                </li>
                <li class="color-grey tooltips" data-style="grey" data-original-title="Grey">
                </li>
                <li class="color-blue tooltips" data-style="blue" data-original-title="Blue">
                </li>
                <li class="color-red tooltips" data-style="red" data-original-title="Red">
                </li>
                <li class="color-light tooltips" data-style="light" data-original-title="Light">
                </li>
            </ul>
        </div>
        <div class="theme-option">
            <span>
                Layout </span>
            <select class="layout-option form-control input-small">
                <option value="fluid" selected="selected">Fluid</option>
                <option value="boxed">Boxed</option>
            </select>
        </div>
        <div class="theme-option">
            <span>
                Header </span>
            <select class="header-option form-control input-small">
                <option value="fixed" selected="selected">Fixed</option>
                <option value="default">Default</option>
            </select>
        </div>
        <div class="theme-option">
            <span>
                Sidebar </span>
            <select class="sidebar-option form-control input-small">
                <option value="fixed">Fixed</option>
                <option value="default" selected="selected">Default</option>
            </select>
        </div>
        <div class="theme-option">
            <span>
                Sidebar Position </span>
            <select class="sidebar-pos-option form-control input-small">
                <option value="left" selected="selected">Left</option>
                <option value="right">Right</option>
            </select>
        </div>
        <div class="theme-option">
            <span>
                Footer </span>
            <select class="footer-option form-control input-small">
                <option value="fixed">Fixed</option>
                <option value="default" selected="selected">Default</option>
            </select>
        </div>
    </div>
</div>
<!-- END BEGIN STYLE CUSTOMIZER -->
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
    Calendar <small>calendar page</small>
</h3>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Pages</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">Calendar</a>
        </li>
    </ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet calendar">
            <div class="portlet-title">
            </div>
            <div class="portlet-body light-grey">
                <div id="calendar"></div>
            </div>
            <!-- END CALENDAR PORTLET-->
        </div>
    </div>
</div>
</div>
<!-- END PAGE CONTENT-->
@endsection