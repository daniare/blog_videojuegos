<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "titulo",
        "descripcion",
        "contenido",
        "imagen_cabecera"
    ];

     //Relacion con post
     public function usuario(){

        return $this->belongsTo("App\Models\Usuario");
    }

    public function categorias(){
        return $this->belongsToMany("App\Models\Categoria","categoria_post");
    }
}
