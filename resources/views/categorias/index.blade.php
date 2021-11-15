@section("title", "Categorias")

@extends('layouts.plantilla')

@section('content')
    <div class="row justify-content-centre">
        <div class="col offset-3">
            <h1>Lista de Categorias</h1>
        </div>
    </div>
    <div class="row justify-content-centre">
        <div class="col offset-3">
            <a href="{{route("home")}}" class="btn btn-danger">Volver</a>
            <a href="{{route("categoria.create")}}" class="btn btn-success">Crear</a>
        </div>
    </div>
    <div class="row justify-content-centre">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">F.Creación</th>
                    <th scope="col">F.Actualización</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($categorias as $categoria)
                <tr>
                    <th scope="row">{{$categoria->id}}</th>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->created_at}}</td>
                    <td>{{$categoria->updated_at}}</td>
                    <td>
                        
                            <a class="btn btn-warning" href="{{route('categoria.edit',$categoria)}}">
                                <img src="" alt="Actualizar"/>
                            </a>
                       
                        <form action="{{route('categoria.destroy',$categoria)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                <img src="" alt="Eliminar"/>
                            </button>
                        </form>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@endsection