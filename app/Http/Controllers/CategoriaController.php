<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function index(){

        $categorias = Categoria::all();
        
        return view("categorias.index", compact("categorias"));

    }

    public function create(){
        return view("categorias/create");
    }

    public function store(Request $request){

        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        
        $categoria->save();

        return redirect()->route("categoria.index");

    }

    

    public function show(Categoria $categoria){

        return view("categoria/show", compact("categoria"));
    }
    

    public function edit(Categoria $categorium){

        //return $categorium;
        return view("categorias/edit",compact("categorium"));
    }

    public function update(Categoria $categorium, Request $request){

        $categorium->update($request->all());
        return redirect()->route("categoria.index");

    }

    public function destroy(Categoria $categorium){

        //return $categorium;
        
        $categorium->delete();

        return redirect()->route("categoria.index");
    }
}
