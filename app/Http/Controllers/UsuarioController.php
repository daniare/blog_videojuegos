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

        return view("usuarios/create");

    }

    public function store(Request $request){

        $usuario = new Usuario();
        
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->nombre= $request->nombre;
        $usuario-> apellidos= $request->apellidos;
        $usuario->email= $request->email;
        $usuario->password= $request->password;

        $usuario->save();
        return redirect()->route("usuario.show",$usuario);

    }

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return redirect()->route("usuario.index");
    }

    public function show(Usuario $usuario){
        return view("usuarios/show", compact("usuario"));
    }

    public function edit(Usuario $usuario){
        return view("usuarios/edit",compact("usuario"));

    }

    public function update(Usuario $usuario, Request $request){
        $usuario->update($request->all());
        return redirect()->route("usuario.index",$usuario);
    }
}
