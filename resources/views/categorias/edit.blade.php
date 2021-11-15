@section("title", "Actualizar categoría")

@extends('layouts.plantilla')

@section("content")

<div class="row">
    <div class="col">
        <form action="{{route('categoria.update',$categorium)}}" method="post">
            @csrf
            @method("put")
            <h2 class="h2">Nombre: </h2>
            <input type="text" name="nombre" value="{{old('nombre'),$categorium->nombre}}"/>
            <input type="submit" value="Actualizar" />
        </form>
    </div>
</div>

@endsection