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
					<div class="col-md-12">
						<!-- Logo -->
						<div class="logo">
							<h1><a href="{{url('/admin-inicio')}}">Vimoda Administrador</a></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- formulario -->
		<div class="page-content container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-wrapper">
						<div class="box">
							<div class="content-wrap">
								<form id="login" role="form" method="post" action="{{url('/login')}}">
									<h6>Iniciar sesión</h6>
									<div class="form-group">
										<input required class="form-control" name="email" type="email" placeholder="E-mail" autofocus>
									</div>
									<div class="form-group">
										<input required class="form-control" name="clave" type="password" placeholder="Clave" minlength="5">
									</div>
									@if (isset($msg))
									<p class="text-warning text-center">{{$msg}}</p>
									@endif
									<div class="action">
										<input type="submit" class="btn btn-lg btn-primary btn-block signup" value="Entrar">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{url('admin_files/js/jquery.min.js')}}"></script>
		<script src="{{url('admin_files/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{url('admin_files/vendors/validation-1.15.1/jquery.validate.min.js')}}"></script>
		<script src="{{url('admin_files/vendors/validation-1.15.1/localization/messages_es_PE.js')}}"></script>
		<script src="{{url('admin_files/js/login.js')}}"></script>
	</body>
</html>