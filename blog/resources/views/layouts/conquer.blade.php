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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

	<!-- Map -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="http://maps.google.com/maps/api/js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
	<style type="text/css">
		#map {
			position: absolute;
			right: 0;
			left: 0;
			bottom: 0;
			top: 0;
		}
	</style>

	<!-- PWA  -->
	<meta name="theme-color" content="#6777ef" />
	<link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
	<link rel="manifest" href="{{ asset('/manifest.json') }}">

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
				<a href="index.html">
					<img src="{{ asset('assets/img/logo.png')}}" alt="logo" />
				</a>
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
						<img alt="" src="{{ asset('assets/img/avatar3_small.jpg')}}" />
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
					<li class="sidebar-toggler-wrapper">
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
						<div class="sidebar-toggler">
						</div>
						<div class="clearfix">
						</div>
						<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					</li>
					<li class="sidebar-search-wrapper">
						<form class="search-form" role="form" action="index.html" method="get">
							<div class="input-icon right">
								<i class="fa fa-search"></i>
								<input type="text" class="form-control input-sm" name="query" placeholder="Search...">
							</div>
						</form>
					</li>
					<li class="start {{ Request::is('/') ? 'active' : '' }} ">
						<a href="{{ url('/') }}">
							<i class="icon-home"></i>
							<span class="title">Dashboard</span>
							@yield('testingsidebar')
						</a>
					</li>
					<li class="{{ Request::is('rencanas') ? 'active' : '' }}">
						<a href="{{ url('rencanas') }}">
							<i class="fa fa-calendar"></i>
							<span class="title">Rencana Kegiatan</span>
						</a>
					</li>
					<li class="{{ Request::is('tambangs') ? 'active' : '' }}">
						<a href="{{ url('tambangs') }}">
							<i class="fa fa-building"></i>
							<span class="title">Pertambangan</span>
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
					<li class="{{ Request::is('karyawans') ? 'active' : '' }}">
						<a href="{{ url('karyawans') }}">
							<i class="fa fa-users"></i>
							<span class="title">Karyawan</span>
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
				@yield('tempat_konten')
				@yield('modal')
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2013 &copy; Conquer by keenthemes.
		</div>
		<div class="footer-tools">
			<span class="go-top">
				<i class="fa fa-angle-up"></i>
			</span>
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
	<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/gmaps/gmaps.js')}}"></script>
	<script src="assets/plugins/gmaps/gmaps.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- END PAGE LEVEL PLUGINS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/table-managed.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/maps-google.js" type="text/javascript"></script>
	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<!-- <script>
		jQuery(document).ready(function () {
			App.init();
			TableManaged.init();
		});
	</script>
	<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.init();
			Calendar.init();
		});
	</script> -->

	<!-- END CORE PLUGINS -->
	<script>
		jQuery(document).ready(function() {
			// initiate layout and plugins
			App.init();
		});
	</script>
	@yield('tempat_script')
	<!-- script calendar -->
	<!-- <script>
		$(document).ready(function() {

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			var calendar = $('#calendar').fullCalendar({
				editable: true,
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				events: '/rencana.index',
				selectable: true,
				selectHelper: true,
				select: function(start, end, allDay) {
					var nama_kegiatan = prompt('Masukkan Nama Kegiatan:');

					if (nama_kegiatan) {
						var tanggal_mulai = $.fullCalendar.formatDate(tanggal_mulai, 'Y-MM-DD HH:mm:ss');

						var tanggal_akhir = $.fullCalendar.formatDate(tanggal_akhir, 'Y-MM-DD HH:mm:ss');

						$.ajax({
							url: "{{route('rencana.action')}}",
							type: "POST",
							data: {
								nama_kegiatan: nama_kegiatan,
								tanggal_mulai: tanggal_mulai,
								tanggal_akhir: tanggal_akhir,
								type: 'add'
							},
							success: function(data) {
								calendar.fullCalendar('refetchEvents');
								alert("Event Created Successfully");
							}
						})
					}
				},
				editable: true,
				eventResize: function(event, delta) {
					var tanggal_mulai = $.fullCalendar.formatDate(event.tanggal_mulai, 'Y-MM-DD HH:mm:ss');
					var tanggal_akhir = $.fullCalendar.formatDate(event.tanggal_akhir, 'Y-MM-DD HH:mm:ss');
					var nama_kegiatan = event.nama_kegiatan;
					var id = event.id;
					$.ajax({
						url: "{{route('rencana.action')}}",
						type: "POST",
						data: {
							nama_kegiatan: nama_kegiatan,
							tanggal_mulai: tanggal_mulai,
							tanggal_akhir: tanggal_akhir,
							id: id,
							type: 'update'
						},
						success: function(response) {
							calendar.fullCalendar('refetchEvents');
							alert("Event Updated Successfully");
						}
					})
				},
				eventDrop: function(event, delta) {
					var tanggal_mulai = $.fullCalendar.formatDate(event.tanggal_mulai, 'Y-MM-DD HH:mm:ss');
					var tanggal_akhir = $.fullCalendar.formatDate(event.tanggal_akhir, 'Y-MM-DD HH:mm:ss');
					var nama_kegiatan = event.nama_kegiatan;
					var id = event.id;
					$.ajax({
						url: "{{route('rencana.action')}}",
						type: "POST",
						data: {
							nama_kegiatan: nama_kegiatan,
							tanggal_mulai: tanggal_mulai,
							tanggal_akhir: tanggal_akhir,
							id: id,
							type: 'update'
						},
						success: function(response) {
							calendar.fullCalendar('refetchEvents');
							alert("Event Updated Successfully");
						}
					})
				},

				eventClick: function(event) {
					if (confirm("Are you sure you want to remove it?")) {
						var id = event.id;
						$.ajax({
							url: "{{route('rencana.action')}}",
							type: "POST",
							data: {
								id: id,
								type: "delete"
							},
							success: function(response) {
								calendar.fullCalendar('refetchEvents');
								alert("Event Deleted Successfully");
							}
						})
					}
				}
			});

		});
	</script> -->
</body>
<!-- END BODY -->

</html>