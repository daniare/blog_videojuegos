<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function posts(){

        $usuario= Auth::user();

        $posts = Post::all()->where("usuario_id",$usuario->id);

        return view("perfil/posts",compact("posts"));
    } 
}
