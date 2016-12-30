<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="">
		<title>Sdely</title>
		<meta name="description" content="agg tmr, report team, mid no compra wards">
		<link href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
		<link href="{{url('dist/css/timeline.css')}}" rel="stylesheet">
		<link href="{{url('dist/css/sb-admin-2.css')}}" rel="stylesheet">
		<link href="{{url('bower_components/morrisjs/morris.css')}}" rel="stylesheet">
		<link href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('bower_components/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			var baseUrl = '{{url()}}';
		</script>
	</head>
	<body>
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url('/admin-inicio')}}">{{Auth::user()->name}}</a>
				</div>
				<!-- /.navbar-header -->
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							@if (Auth::user()->flag)
							<!--li>
								<a href="{{url('/admin-xxx')}}"><i class="fa fa-thumbs-o-up fa-fw"></i> xxx</a>
							</li-->
							@endif
							<li>
								<a href="{{url('/admin-registrados')}}"><i class="fa fa-users fa-fw"></i> Reporte de registrados</a>
							</li>
							<li>
								<a href="{{url('/admin-logout')}}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
							</li>
							<li>
								<a target="_blank" href="http://sdely.com/"><i class="fa fa-external-link fa-fw"></i> sdely.com</a>
							</li>
						</ul>
					</div>
					<!-- /.sidebar-collapse -->
				</div>
				<!-- /.navbar-static-side -->
			</nav>
			<div id="page-wrapper">
				@yield('contenido')
			</div>
			<!-- /#page-wrapper -->
		</div>
		<!-- /#wrapper -->

		<!-- jQuery -->
		<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="{{url('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

		@if (isset($esInicio) && $esInicio == 'si')
		<!-- Morris Charts JavaScript -->
		<script>
			var reporte = {{$reporte}};
		</script>
		<script src="{{url('bower_components/raphael/raphael-min.js')}}"></script>
		<script src="{{url('bower_components/morrisjs/morris.min.js')}}"></script>
		<script src="{{url('js/morris-data.js')}}"></script>
		@endif

		<script src="{{url('bower_components/blockUI/jquery.blockUI.js')}}"></script>

		<script src="{{url('bower_components/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{url('bower_components/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

		<!-- Custom Theme JavaScript -->
		<script src="{{url('dist/js/sb-admin-2.js')}}"></script>
		<script src="{{url('dist/js/admin.js')}}"></script>
	</body>
</html>