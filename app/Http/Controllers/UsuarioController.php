<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $usuarios = Usuario::orderBy("id","asc")->paginate(50);

        return view("usuarios.index", compact("usuarios"));

    }

    public function create(){

        return view("usuarios.create");

    }

    public function store(Request $request){

    }

    public function destroy(Usuario $usuario){

    }

    public function show(Usuario $usuario){

    }

    public function edit(Usuario $usuario){

    }

    public function update(Usuario $usuario, Request $request){

    }
}
