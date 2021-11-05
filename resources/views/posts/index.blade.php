@section("title", "Posts")

@extends("layouts.plantilla")

@section("content")

    <br><br>
    <div class="row">
        <div class="col-3"> 
            <a href="{{route('home')}}" class="btn btn-danger"><- Volver</a>
        </div>
        <div class="col-3 offset-6 text-right"> 
            <a href="{{route('post.create')}}" class="btn btn-success">Crear</a>
        </div>
    </div>
    <br>
    <div class="row align-items-center">
        @foreach($posts as $post)
        <div class="col-4 align-self-center">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('images/prueba/images.jpg')}}" class="card-img-top" alt="{{$post->descripcion}}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->titulo}}</h5>
                    <p class="card-text">{{$post->descripcion}}</p>
                    <a href="{{route('post.show',$post)}}" class="btn btn-primary">Leer más...</a>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>


@endsection
