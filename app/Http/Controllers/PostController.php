<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index(){

        $posts = Post::orderBy("updated_at","desc")->paginate(50);
        /*$post = new Post();
        $posts= $post->all();*/

        return view("posts.index", compact("posts"));
    }

    public function create(){

        $categorias = Categoria::all();

        return view("posts.create", compact("categorias"));
    }

    /*public function store(StorePost $request){ 
        
        $post = Post::create($request->all());
        return redirect("home");
    }*/

    public function store(Request $request){

        $post = new Post();

        $post->titulo = $request->titulo;
        $post->descripcion= $request->descripcion;
        $post->contenido = $request->contenido;
        $post->usuario_id=Auth::user()->id;

        $post->save();
        
        //Introducir varios datos a la vez
        $post->categorias()->sync($request->categorias);
        /*
        Para introducir uno:
        $post->categorias()->attach($request->categoria);
        */
        
        return redirect()->route("post.show",$post);
    }


    public function show(Post $post){

        $usuario=null;

        if($post->usuario_id != null){
            $usuario = Usuario::find($post->usuario_id);
        }

        return view("posts/show", compact("post","usuario"));
       
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route("post.index");
    }

    public function edit(Post $post){

        return view("posts/edit", compact("post"));
    }

    public function update(Post $post, Request $request){

        $post->update($request->all());
        return redirect()->route("post.show",$post);
    }

}
