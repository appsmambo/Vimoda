<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Sdely</title>
		<link href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">
		<link href="{{url('dist/css/sb-admin-2.css')}}" rel="stylesheet">
		<link href="{{url('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Control de acceso</h3>
						</div>
						<div class="panel-body">
							<form role="form" method="post" action="{{url('/login')}}">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Clave" name="clave" type="password">
									</div>
									@if (isset($msg))
									<p class="text-warning text-center">{{$msg}}</p>
									@endif
									<input type="submit" class="btn btn-lg btn-primary btn-block" value="Entrar">
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>
		<script src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{url('bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
		<script src="{{url('dist/js/sb-admin-2.js')}}"></script>
	</body>
</html>