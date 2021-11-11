@extends('layouts.plantilla')

@section("title","Login")
@section('content')
<form action="{{route('usuario.loguearse')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-3">
            <h2 class="h2">Email:</h2>
        </div>
        <div class="col-9">
            <input type="text" name="email" class="form-control">
        </div>
        <div class="col-3">
            <h2 class="h2">Contraseña:</h2>
        </div>
        <div class="col-9">
            <input type="password" name="password" class="form-control">
        </div>
        <div class="col-12">
            <input type="submit" value="Login">
        </div>
    </div>
</form>
@endsection
