<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Sistem Informasi Produksi Bijih Bauksit</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="{{ asset('assets/css/style-conquer.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/themes/default.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" />

    <!-- Kalender -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" /> -->

    <!-- Map -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCg-5B1x7w02fHQV7f1PSgLiZpv-R8yN5c" type="text/javascript"></script>
    <!-- <script src="http://maps.google.com/maps/api/js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" /> -->
    <!-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script> -->


    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css%22%3E" />
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css%22%3E" />

    <!-- DatePicker -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">   -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <div class="header navbar  navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <img src="{{ asset('assets/img/logo1.png')}}" alt="logo" />
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <img src="{{ asset('assets/img/menu-toggler.png')}}" alt="" />
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <!-- <li class="dropdown" id="header_notification_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-success">
							6 </span>
					</a>
					<ul class="dropdown-menu extended notification">
						<li>
							<p>
								You have 14 new notifications
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-success">
											<i class="fa fa-plus"></i>
										</span>
										New user registered. <span class="time">
											Just now </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-danger">
											<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. <span class="time">
											15 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-warning">
											<i class="fa fa-bell"></i>
										</span>
										Server #2 not responding. <span class="time">
											22 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-info">
											<i class="fa fa-bullhorn"></i>
										</span>
										Application error. <span class="time">
											40 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-danger">
											<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. <span class="time">
											2 hrs </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-danger">
											<i class="fa fa-bolt"></i>
										</span>
										2 user IP blocked. <span class="time">
											5 hrs </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-warning">
											<i class="fa fa-bell"></i>
										</span>
										Storage Server #4 not responding. <span class="time">
											45 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-info">
											<i class="fa fa-bullhorn"></i>
										</span>
										System Error. <span class="time">
											55 mins </span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="label label-sm label-icon label-danger">
											<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. <span class="time">
											2 hrs </span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">
							<a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
						</li>
					</ul>
				</li> -->
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <!-- <li class="dropdown" id="header_inbox_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-info">
							5 </span>
					</a>
					<ul class="dropdown-menu extended inbox">
						<li>
							<p>
								You have 12 new messages
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
											<img src="{{ asset('assets/img/avatar2.jpg')}}" alt="" />
										</span>
										<span class="subject">
											<span class="from">
												Lisa Wong </span>
											<span class="time">
												Just Now </span>
										</span>
										<span class="message">
											Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
											<img src="{{ asset('assets/img/avatar3.jpg')}}" alt="" />
										</span>
										<span class="subject">
											<span class="from">
												Richard Doe </span>
											<span class="time">
												16 mins </span>
										</span>
										<span class="message">
											Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
											<img src="{{ asset('assets/img/avatar1.jpg')}}" alt="" />
										</span>
										<span class="subject">
											<span class="from">
												Bob Nilson </span>
											<span class="time">
												2 hrs </span>
										</span>
										<span class="message">
											Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
											<img src="{{ asset('assets/img/avatar2.jpg')}}" alt="" />
										</span>
										<span class="subject">
											<span class="from">
												Lisa Wong </span>
											<span class="time">
												40 mins </span>
										</span>
										<span class="message">
											Vivamus sed auctor 40% nibh congue nibh... </span>
									</a>
								</li>
								<li>
									<a href="inbox.html?a=view">
										<span class="photo">
											<img src="{{ asset('assets/img/avatar3.jpg')}}" alt="" />
										</span>
										<span class="subject">
											<span class="from">
												Richard Doe </span>
											<span class="time">
												46 mins </span>
										</span>
										<span class="message">
											Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">
							<a href="inbox.html">See all messages <i class="fa fa-angle-right"></i></a>
						</li>
					</ul>
				</li> -->
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <!-- <li class="dropdown" id="header_task_bar">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-warning">
							5 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li>
							<p>
								You have 12 pending tasks
							</p>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 250px;">
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												New release v1.2 </span>
											<span class="percent">
												30% </span>
										</span>
										<span class="progress">
											<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													40% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												Application deployment </span>
											<span class="percent">
												65% </span>
										</span>
										<span class="progress progress-striped">
											<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													65% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												Mobile app release </span>
											<span class="percent">
												98% </span>
										</span>
										<span class="progress">
											<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													98% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												Database migration </span>
											<span class="percent">
												10% </span>
										</span>
										<span class="progress progress-striped">
											<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													10% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												Web server upgrade </span>
											<span class="percent">
												58% </span>
										</span>
										<span class="progress progress-striped">
											<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													58% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												Mobile development </span>
											<span class="percent">
												85% </span>
										</span>
										<span class="progress progress-striped">
											<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													85% Complete </span>
											</span>
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="task">
											<span class="desc">
												New UI release </span>
											<span class="percent">
												18% </span>
										</span>
										<span class="progress progress-striped">
											<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
												<span class="sr-only">
													18% Complete </span>
											</span>
										</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="external">
							<a href="#">See all tasks <i class="fa fa-angle-right"></i></a>
						</li>
					</ul>
				</li> -->
                <!-- END TODO DROPDOWN -->
                <li class="devider">
                    &nbsp;
                </li>
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        @if (Auth::user())
                        <span class="username">
                            {{Auth::user()->name}}
                            <!-- mengambil user yg login, kalau blum login akan error -->
                        </span>
                        @endif
                        <i class="fa fa-angle-down"></i>

                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <i class="fa fa-key"></i><input class="btn btn-danger" type="submit" value="Logout">
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu">
                    <li class="sidebar-search-wrapper">
                        <form class="search-form" role="form" action="index.html" method="get">
                            <div class="input-icon right">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
                            </div>
                        </form>
                    </li>
                    <li class="start {{ Request::is('/') ? 'active' : '' }} ">
                        <a href="{{ url('/home') }}">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('tambangs') ? 'active' : '' }}">
                        <a href="{{ url('tambangs') }}">
                            <i class="fa fa-building"></i>
                            <span class="title">Pertambangan</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('rencanas') ? 'active' : '' }}">
                        <a href="{{ url('rencanas') }}">
                            <i class="fa fa-calendar"></i>
                            <span class="title">Rencana Kegiatan</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('bauksits') ? 'active' : '' }}">
                        <a href="{{ url('bauksits') }}">
                            <i class="fa fa-cubes"></i>
                            <span class="title">Data Bauksit</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('alats') ? 'active' : '' }}">
                        <a href="{{ url('alats') }}">
                            <i class="fa fa-truck"></i>
                            <span class="title">Alat Berat</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('pengupasans') ? 'active' : '' }}">
                        <a href="{{ url('pengupasans') }}">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Pengupasan Tanah Pucuk</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('penggalihans') ? 'active' : '' }}">
                        <a href="{{ url('penggalihans') }}">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Penggalihan Bijih</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('pits') ? 'active' : '' }}">
                        <a href="{{ url('pits') }}">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Pengangkutan pit Menuju Washing Plant</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('ports') ? 'active' : '' }}">
                        <a href="{{ url('ports') }}">
                            <i class="fa fa-cogs"></i>
                            <span class="title">Pengangkutan Washing Plant Menuju Port</span>
                        </a>
                    </li>
                    @can('viewManajer-permission')
                    <li class="{{ Request::is('karyawans') ? 'active' : '' }}">
                        <a href="{{ url('karyawans') }}">
                            <i class="fa fa-users"></i>
                            <span class="title">Karyawan</span>
                        </a>
                    </li>
                    @endcan
                    <li class="{{ Request::is('laporans') ? 'active' : '' }}">
                        <a href="{{ url('laporans') }}">
                            <i class="fa  fa-exclamation-triangle"></i>
                            <span class="title">Laporan Kerusakan</span>
                        </a>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- menyediakan rumah konten -->
                <h3 class="page-title">
                    Tambah Data Pertambangan
                </h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="/">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Tambah Data Pertambangan</a>
                        </li>
                    </ul>
                </div>
                <div class="portlet">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-cogs"></i>Form tambah Rencana Kegiatan
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <form method="POST" action="{{ route('rencanas.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="kegiatan" class="col-sm-2 col-form-label">kegiatan</label>
                                <div class="col-sm-10">
                                    <input type="text" value="" name="kegiatan" class="form-control" id="kegiatan" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="musim" class="col-sm-2 col-form-label">musim</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="musim" id="musim" required>
                                        <option value="kemarau">Kemarau</option>
                                        <option value="hujan">Hujan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mulai" class="col-sm-2 col-form-label">Mulai</label>
                                <div class="col-sm-10">
                                    <input type="text" name="mulai" class="date form-control" id="mulai" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="akhir" class="col-sm-2 col-form-label">Akhir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="akhir" class="date form-control" id="akhir" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="presentase" class="col-sm-2 col-form-label">Presentase Selesai</label>
                                <div class="col-sm-10">
                                    <input type="text" value="" name="presentase" class="form-control" id="presentase" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tambang_id" class="col-sm-2 col-form-label">Pertambangan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="tambang_id" id="tambang_id" required>
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
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="footer-inner">
        </div>
        <div class="footer-tools">
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('assets/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END CORE PLUGINS -->
    <script src="{{ asset('assets/scripts/app.js')}}"></script>
    <script src="{{ asset('assets/plugins/jquery.editable.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{{ asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script> -->
    <!-- <script type="text/javascript" src="{{ asset('assets/plugins/gmaps/gmaps.js')}}"></script> -->
    <!-- <script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script> -->
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="assets/scripts/app.js"></script>
    <script src="assets/scripts/table-managed.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script> -->
    <script src="assets/scripts/app.js" type="text/javascript"></script>
    <script src="assets/scripts/maps-google.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

    <!-- Datatables -->

    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js%22%3E"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js%22%3E"></script>

    <!-- DatePicker -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"> </script>
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <!-- END CORE PLUGINS -->

    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
        });
    </script>
    <script type="text/javascript">
        $('.date').datepicker({
            format: 'yyyy,mm,dd'
        });
    </script>
    @yield('tempat_script')

</body>
<!-- END BODY -->

</html>