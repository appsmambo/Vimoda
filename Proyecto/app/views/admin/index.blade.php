@extends('layouts.backend')
@section('contenido')

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Datos registrados</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Hitorial de usuarios registrados
			</div>
			<div class="panel-body">
				<div id="morris-area-chart"></div>
			</div>
		</div>
	</div>
</div>

@stop