<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;

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
        return view("posts.create");
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

        $post->save();
        return redirect()->route("post.show",$post);
    }


    public function show(Post $post){

        return view("posts/show", compact("post"));
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
