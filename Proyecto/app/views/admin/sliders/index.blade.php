@extends('layouts.backend')
@section('contenido')
<h2>Sliders en home</h2>
<p>
    <a href="{{URL::previous()}}" title="Atrás" class="btn btn-warning">Atrás</a>
    <a href="{{URL::to('/admin-sliders-nuevo')}}" title="Nuevo registro" class="btn btn-info">Nuevo registro</a>
</p>
<table id="sliders" class="table table-striped">
    <tr>
        <th>
            Orden
        </th>
        <th>
            Descripción
        </th>
        <th>
            Url
        </th>
        <th>
            Imagenes
        </th>
        <th>
            Estado
        </th>
	</tr>
    @foreach($sliders as $slider)
    <tr>
        <td>{{$slider->orden}}</td>
        <td>{{$slider->descripcion}}</td>
        <td>{{$slider->url}}</td>
        <td>
            <a href="{{URL::to($slider->archivo_lg)}}" data-fancybox data-caption="Banner en desktop" class="btn btn-info">Desktop</a>
            <a href="{{URL::to($slider->archivo_sm)}}" data-fancybox data-caption="Banner en tablet" class="btn btn-info">Tablet</a>
            <a href="{{URL::to($slider->archivo_xs)}}" data-fancybox data-caption="Banner en mobile" class="btn btn-info">Mobile</a>
        </td>
        <td>
            <a data-registro="{{$slider->orden}}" 
               href="{{URL::to('/admin-sliders-publicar')}}/{{$slider->id}}/{{$slider->estado === 0 ? 1 : 0 }}" 
               class="borrar btn btn-danger">
                @if ($slider->estado)
                <i class="glyphicon glyphicon-check"></i>
                @else
                <i class="glyphicon glyphicon-unchecked"></i>
                @endif
            </a>
        </td>
    </tr>
    @endforeach
</table>
@stop
@section('scripts')
<script>
    $(function(){
        $("[data-fancybox]").fancybox();
    });
</script>
@stop