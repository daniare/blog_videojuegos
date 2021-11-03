<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

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
        $post->contenido = $request->contenido;

        $post->save();
        return redirect("/");
    }
}
