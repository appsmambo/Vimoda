<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>VIMODA</title>
		<link rel="stylesheet" type="text/css" href="{{url('admin_files/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('admin_files/css/styles.css')}}">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			var baseUrl = '{{url()}}';
		</script>
	</head>
	<body class="login-bg">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<!-- Logo -->
						<div class="logo">
							<h1><a href="{{url('/admin-inicio')}}">Vimoda Administrador</a></h1>
						</div>
					</div>
					@if (isset(Auth::user()->name))
					<div class="col-md-5">
						<div class="navbar navbar-inverse" role="banner">
							<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
										<ul class="dropdown-menu animated fadeInUp">
											<!--<li><a href="profile.html">Profile</a></li>-->
											<li><a href="{{url('admin-logout')}}">Salir</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box" style="display: block;">
						<ul class="nav">
							<!-- Main menu -->
							<li class="current"><a href="{{url('/admin-inicio')}}"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>
							<li><a href="{{url('/admin-sliders')}}"><i class="glyphicon glyphicon-record"></i> Sliders</a></li>
							<li><a href="{{url('/admin-videos')}}"><i class="glyphicon glyphicon-film"></i> Videos en home</a></li>
							<li><a href="{{url('/admin-configuracion')}}"><i class="glyphicon glyphicon-cog"></i> Configuración</a></li>
							<li><a href="{{url('/admin-logout')}}"><i class="glyphicon glyphicon-remove"></i> Salir</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10">
					@yield('contenido')
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="copy text-center">
					Copyright <?php echo date('Y') ?> <a href="http://www.vimoda.pe" target="_blank">Vimoda</a>
				</div>
			</div>
		</footer>
		<script src="{{url('admin_files/js/jquery.min.js')}}"></script>
		<script src="{{url('admin_files/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{url('admin_files/vendors/validation-1.15.1/jquery.validate.min.js')}}"></script>
		<script src="{{url('admin_files/vendors/validation-1.15.1/localization/messages_es_PE.js')}}"></script>
		<script src="{{url('admin_files/js/custom.js')}}"></script>
	</body>
</html>