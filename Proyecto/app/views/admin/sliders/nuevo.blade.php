@extends('layouts.backend')
@section('contenido')
<h2>Nuevo slider</h2>
<form action="{{URL::to('/admin-sliders-grabar')}}" id="slider" name="slider" method="post" enctype="multipart/form-data">
    <p>
        <a href="{{URL::previous()}}" title="Atrás" class="btn btn-warning">Atrás</a>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </p>
    {{Form::token()}}
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="url">Enlace</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="Enlace">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="orden">Orden</label>
                <input type="number" class="form-control" id="orden" name="orden" placeholder="Orden" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="archivo_lg">Banner Desktop</label>
                <input type="file" class="form-control" id="archivo_lg" name="archivo_lg" required>
                <small>1600 x 700</small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="archivo_sm">Banner Tablet</label>
                <input type="file" class="form-control" id="archivo_sm" name="archivo_sm" required>
                <small>480 x 400</small>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="archivo_xs">Banner Mobile</label>
                <input type="file" class="form-control" id="archivo_xs" name="archivo_xs" required>
                <small>380 x 320</small>
            </div>
        </div>
    </div>
    <p>
        <a href="{{URL::previous()}}" title="Atrás" class="btn btn-warning">Atrás</a>
        <button type="submit" class="btn btn-primary">Grabar</button>
    </p>
</form>
@stop
@section('scripts')
<script>
    $(function(){
        $("#slider").validate();
    });
</script>
@stop