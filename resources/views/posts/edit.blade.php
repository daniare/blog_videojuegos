@section('title', "Crear Post")

@extends('layouts.plantilla')

@section('content')
<div >
  <div class="row justify-content-center">
    <div class="col offset-5">
      <h1>Modificar Post</h1>
    </div>
  </div>
    <br>
    <form action="{{route('post.update',$post)}}" method="post">
    @csrf
    @method("put")
        <div class="row justify-content-center">
          <div class="col offset-5">
            <h3>Título del post</h3>
          </div>
          <div class="col offset-5">
            <input type="text" name="titulo" value="{{old('titulo',$post->titulo)}}"/>
          </div>
        </div>
        <br>
        <div class="row justify-content-center">
          <div class="col offset-5">
            <h3>Añade una descripción</h3>
          </div>
          <div class="col offset-5">
            <input type="text" name="descripcion" value="{{old('descripcion',$post->descripcion)}}"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class=" col offset-5">
            <h3>Contenido del post</h3>
          </div>
          <div class="col-12">
            <div id="toolbar"></div>
          </div>
          <div class="col-12">
            <div id="editor" style="overflow:auto;"></div>
          </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
          <input type="hidden" id="contenido" name="contenido" value="{{$post->contenido}}"/>
          <input type="hidden" id="imagen-cabecera" name="imagen-cabecera" value="no disponible"/>
          <div class="col offset-3">
            <input type="submit" value="Actualizar" onclick="muestra()" class="btn btn-warning"/>
          </div>
          <div class="col offset-1">
            <a href="{{route('post.index')}}" class="btn btn-danger">Volver</a>
          </div>
        </div>
          <script>

              window.onload= ()=>{
                document.getElementById("editor").firstChild.innerHTML=document.getElementById("contenido").value; 
              }

              function muestra(){
                document.getElementById("contenido").value="";
                let contenido = document.getElementById("editor").firstChild.innerHTML; 
                document.getElementById("contenido").value=contenido;
                console.log(document.getElementById("contenido").value);
              }
          </script>
    </form>
    <br/>
</div>
@endsection
