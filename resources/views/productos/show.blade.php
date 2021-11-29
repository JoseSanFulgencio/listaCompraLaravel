@extends('layouts.master')

@section('content')

    @section('content')

<div class="row">

    <div class="col-sm-4">

        <a href="{{ url('/productos/show/' . $id ) }}">
            <img src="" style="height:200px"/>
        </a>

    </div>
    <div class="col-sm-8">

        <h4>{{$producto[0]}}</h4>
        <h6>Categoría: {{$producto[1]}}</h6>
        <p><strong>Estado: </strong>
            @if($producto)
                Producto actualmente comprado.
            @else
                Producto en stock.
            @endif
        </p>

        @if($producto)
            <a class="btn btn-danger" href="#">Devolver producto</a>
        @else
            <a class="btn btn-primary" href="#">Comprar producto</a>
        @endif
        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar producto</a>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

    </div>
</div>

@stop

@stop

@stop
