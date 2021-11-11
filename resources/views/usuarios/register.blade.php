@section("title" ,"Crear Uusario")

@extends('layouts.plantilla')

@section("content")

<div class="row">
    <div class="col">
        <h1 class="h1">Crear usuario</h1>
    </div>
</div>
<form class="mb-3" action="{{route('usuario.store')}}" method="post"> 
    @csrf
<div class="row">
    <div class="col-12">
        <h2 class="h2">Nombre de Usuario</h2>
    </div>
    <div class="col-12">
        <input type="text" name="nombre_usuario" class="form-control"/>
    </div>
    <div class="col-6">
        <h2 class="h2">Nombre</h2>
    </div>
    <div class="col-6">
        <h2 class="h2">Apellidos</h2>
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="apellidos">
    </div>
    <div class="col-12">
        <h2 class="h2">Email</h2>
    </div>
    <div class="col-12">
        <input type="email" class="form-control" name="email">
    </div>
    <div class="col-12">
        <h2 class="h2">Contraseña</h2>
    </div>
    <div class="col-12">
        <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" class="btn btn-success" value="Registrar">
</div>
</form>
@endsection