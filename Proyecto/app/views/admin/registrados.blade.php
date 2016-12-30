@extends('layouts.backend')
@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Ver registrados</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Reporte de registrados
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-4 col-md-5">
						<input id="fecha" type="text" class="form-control" style="margin-bottom:12px">
					</div>
					<div class="col-sm-8 col-md-7">
						<button id="consultar" class="btn btn-xl btn-info pull-left"> <i class="fa fa-search"></i> </button>
					</div>
				</div>
				<p>
					&nbsp;
				</p>
				<div id="datos" class="panel panel-primary" style="display:none">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge registros">0</div>
								<div>Registrados!</div>
							</div>
						</div>
					</div>
					<a id="reporte" href="{{url('/admin-reporte')}}">
						<div class="panel-footer">
							<span class="pull-left">Descargar base de datos</span>
							<span class="pull-right"><i class="fa fa-file-excel-o"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
				<p>
					&nbsp;
				</p>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-sm-6 -->
	<!--div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				Participantes por rango de fechas
			</div>
			<!-- /.panel-heading -->
			<!--div class="panel-body">
				<div class="row">
					<div class="col-sm-9">
						<div class="input-daterange input-group" id="datepicker">
							<input id="fecha-inicio" type="text" class="input-sm form-control" name="start">
							<span class="input-group-addon">to</span>
							<input id="fecha-fin" type="text" class="input-sm form-control" name="end">
						</div>
					</div>
					<div class="col-sm-3">
						<button id="consultar-rango" class="btn btn-xl btn-info pull-left"> <i class="fa fa-search"></i> </button>
					</div>
				</div>
				<p>
					&nbsp;
				</p>
				<div id="datos-rango" class="panel panel-primary" style="display:none">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge registros">0</div>
								<div>Registrados!</div>
							</div>
						</div>
					</div>
					<a id="reporte-rango" href="{{url('/admin-reporte-rango')}}">
						<div class="panel-footer">
							<span class="pull-left">Descargar base de datos</span>
							<span class="pull-right"><i class="fa fa-file-excel-o"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
				<p>
					&nbsp;
				</p>
			</div>
		</div>
	</div-->
</div>
<!-- /.row -->
<script>
	var fechaInicio = '{{$fechaInicio}}';
	var fechaFin = '{{$fechaFin}}';
</script>
@stop