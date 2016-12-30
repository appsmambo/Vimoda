@extends('layouts.backend')
@section('contenido')

<style>
	tr.danger {display:none}
</style>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Generar ganadores</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Seleccione la fecha del reto
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-3">
						<select id="getreporte" class="form-control">
							<option>-Fecha del reto-</option>
<?php
$startdate='2016-03-07';
$enddate='2016-03-31';
$timestamp=  strtotime($startdate);
while ($startdate <= $enddate)
{
	$startdate = date('Y-m-d', $timestamp);
	echo '<option value="'.$startdate.'">'.date('M d', $timestamp).'</option>';
	$timestamp = strtotime('+1 days', strtotime($startdate));
}
?>
						</select>
					</div>
					<div class="col-xs-9">
						<button id="generar-sorteo" class="btn btn-xl btn-danger pull-right" style="display:none">Generar ganadores</button>
						<button id="ver-ganadores" class="btn btn-xl btn-info pull-right" style="display:none">Ver ganadores</button>
					</div>
				</div>
				<p>
					&nbsp;
				</p>

				<div class="table-responsive" style="hidden">
					<table id="participantes" class="table table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nombre</th>
								<th>Numero de documento</th>
								<th>Es cliente</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div id="ganadoresModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Vista previa de ganadores</h4>
      </div>
      <div class="modal-body">

<div class="table-responsive">
	<table id="ganadores" class="table table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Numero de documento</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Es cliente</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button id="randomizar" type="button" class="btn btn-info">Randomizar</button>
        <button id="grabar" type="button" class="btn btn-primary" data-dismiss="modal">Grabar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop