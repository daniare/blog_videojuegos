@section("title", "Crear categoría")

@extends('layouts.plantilla')

@section("content")

<div class="row">
    <div class="col">
        <form action="{{route('categoria.store')}}" method="post">
            @csrf
        <h2 class="h2">Nombre: </h2>
        <input type="text" name="nombre" />
        <input type="submit" value="Crear" />
        </form>
    </div>
</div>

@endsection