@section("title","Mis posts")

@extends("layouts.plantilla")

@section('content')
<div class="col-3 offset-6 text-right"> 
    <a href="{{route('post.create')}}" class="btn btn-success">Crear</a>
</div>
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem;">
        <img src="{{asset('images/prueba/images.jpg')}}" class="card-img-top" alt="Imagen por defecto">
        <div class="card-body">
            <h5 class="card-title">{{$post->titulo}}</h5>
            <p class="card-text">{{$post->descripcion}}</p>
            <a href="{{route('post.show',$post)}}" class="btn btn-primary">Ver</a>
        </div>
    </div>
  @endforeach
@endsection