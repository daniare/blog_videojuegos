@section("title", "Usuarios")

@extends('layouts.plantilla')

@section('content')
    <div class="row justify-content-centre">
        <div class="col offset-3">
            <h1>Lista de Usuarios</h1>
        </div>
    </div>
    <div class="row justify-content-centre">
        <div class="col offset-3">
            <a href="{{route("home")}}" class="btn btn-danger">Volver</a>
            <a href="{{route("usuario.create")}}" class="btn btn-success">Crear</a>
        </div>
    </div>
    <div class="row justify-content-centre">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Img Perfil</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo electrónico</th>
                    <!--th scope="col">Rol</th>
                    <th scope="col">Confirmación</th-->
                    <th scope="col">F.Creación</th>
                    <th scope="col">F.Actualización</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($usuarios as $usuario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->img_perfil}}</td>
                    <td>{{$usuario->nombre_usuario}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td>{{$usuario->updated_at}}</td>
                    <td>
                        
                            <a class="btn btn-warning" href="{{route('usuario.edit',$usuario)}}">
                                <img src="" alt="Actualizar"/>
                            </a>
                       
                        <form action="{{route('usuario.destroy',$usuario)}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                <img src="" alt="Eliminar"/>
                            </button>
                        </form>
                        <a class="btn btn-primary" href="{{route('usuario.show',$usuario)}}">
                            <img src="" alt="Ver"/>
                        </a>
                    </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    </div>
@endsection