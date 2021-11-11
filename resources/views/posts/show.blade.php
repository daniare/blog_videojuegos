@section("title", "Ver Posts")

@extends("layouts.plantilla")

@section('content')
    <div class="row justify-content-center">
        <div class="col offset-5">
            <h1>{{$post->titulo}}</h1>
        </div>
    </div>
    <br><br>
    <div class="row justify-content-center">
        <div class="col offset-5">
            <blockquote>"{{$post->descripcion}}"</blockquote>
        </div>
    </div>
        <br><br>
    <div class="row">
        <div class="col">
            <?=$post->contenido?>
        </div>
    </div>
    <br>
    @if($usuario != null)
        <p><a href="{{route('usuario.show',$usuario)}}">{{$usuario->nombre_usuario}}</a>
    @else
        <p>Anónimo
    @endif
    <br>
    <pre> 
    Fecha de creacion: {{$post->created_at}} 
    Última actualización: {{$post->updated_at}}
    </pre> 
        </p>
    <br>
    @if(Auth::user())
    @if (Auth::user()->id == $post->usuario_id)
    <div class="row">
        <div class="col offset-2">
            <form action="{{route('post.destroy',$post)}}" method="post">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        <div class="col offset-1">
            <a href="{{route('post.edit',$post)}}" class="btn btn-warning">Modificar</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a href="{{route('post.index')}}" class="btn btn-danger">Volver</a>
        </div>
    </div>
    @endif
    @endif
@endsection