@section("title" ,"Editar Uusario")

@extends('layouts.plantilla')

@section("content")

<div class="row">
    <div class="col">
        <h1 class="h1">Editar usuario</h1>
    </div>
</div>
<form class="mb-3" action="{{route('usuario.update',$usuario)}}" method="post"> 
    @csrf
    @method("put")
<div class="row">
    <div class="col-12">
        <h2 class="h2">Nombre de Usuario</h2>
    </div>
    <div class="col-12">
        <input type="text" name="nombre_usuario" class="form-control" value="{{old("nombre_usuario",$usuario->nombre_usuario)}}"/>
    </div>
    <div class="col-6">
        <h2 class="h2">Nombre</h2>
    </div>
    <div class="col-6">
        <h2 class="h2">Apellidos</h2>
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="nombre" value="{{old("nombre",$usuario->nombre)}}">
    </div>
    <div class="col-6">
        <input type="text" class="form-control" name="apellidos" value="{{old("apellidos",$usuario->apellidos)}}">
    </div>
    <div class="col-12">
        <h2 class="h2">Email</h2>
    </div>
    <div class="col-12">
        <input type="email" class="form-control" name="email" value="{{old("email",$usuario->email)}}">
    </div>
    <div class="col-12">
        <h2 class="h2">Contraseña</h2>
    </div>
    <div class="col-12">
        <input type="password" class="form-control" name="password" value="{{old("password",$usuario->password)}}">
    </div>
    <input type="submit" class="btn btn-warning" value="Actualizar">
</div>
</form>
@endsection