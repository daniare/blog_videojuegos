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
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Img Perfil</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Contraseña ?</th>
                    <!--th scope="col">Rol</th>
                    <th scope="col">Confirmación</th-->
                    <th scope="col">F.Creación</th>
                    <th scope="col">F.Actualización</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
        @foreach($usuarios as $usario)
                <tr>
                    <th scope="row">{{$usuario->id}}</th>
                    <td>{{$usuario->img_perfil}}</td>
                    <td>{{$usuario->nombre_usuario}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellidos}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>{{$usuario->password}}</td>
                    <td>{{$usuario->created_at}}</td>
                    <td>{{$usuario->updated_at}}</td>
                    <td>
                        <form action="{{route('usuario.edit',$usuario)}}" method="post">
                            @method("put")
                            <button type="submit" class="btn btn-warning">
                                <img src="" alt="Actualizar"/>
                            </button>
                        </form>
                        <form action="{{route('usuario.destroy',$usuario)}}" method="post">
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