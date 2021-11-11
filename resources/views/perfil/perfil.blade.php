@section("title",{{$usuario->nombre_usuario}})

@extends('layouts.plantilla')

@section('content')
<div class="row">
    <div class="col">
        <h2 class="h2">Informacion de {{$usuario->nombre_usuario}}</h2>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p>
            <strong>Nombre de usuario:</strong>
            {{$usuario->nombre_usuario}}
        </p>  
    </div>
    <div class="col-6">
        <p>
            <strong>Nombre:</strong>
            {{$usuario->nombre}}
        </p>
    </div>
    <div class="col-6">
        <p>
            <strong>Apellidos:</strong>
            {{$usuario->apellidos}}
        </p>
    </div>
    <div class="col-12">
        <p>
            <strong>Correo electrónico:</strong>
            {{$usuario->email}}
        </p> 
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{route('usuario.index')}}" class="btn btn-danger">Volver</a>
    </div>
</div>

@endsection