@section('title', "Crear Post")

@extends('layouts.plantilla')

@section('content')
<div style="width: 65%">
    <h1>Crear Post</h1>
    <form action="{{route('post.store')}}" method="post">
    @csrf
        <h3>Título del post</h3>
        <input type="text" name="titulo" />
        <br/>
        <h3>Contenido del post</h3>
        <div id="toolbar"></div>
          <div id="editor"></div>

          <input type="hidden" id="contenido" name="contenido" />
          <input type="hidden" id="imagen-cabecera" name="imagen-cabecera" value="no disponible"/>
          <input type="submit" value="Guardar" onclick="muestra()"/>

          <script>
              function muestra(){
                document.getElementById("contenido").value="";
                let contenido = document.getElementById("editor").firstChild.innerHTML; 
                document.getElementById("contenido").value=contenido;
                console.log(document.getElementById("contenido").value);
              }
          </script>
    </form>
</div>
@endsection

