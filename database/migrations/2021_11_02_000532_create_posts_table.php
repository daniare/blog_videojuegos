<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->text("descripcion");
            $table->longText("contenido");
            $table->string("imagen_cabecera")->nullable();
            $table->unsignedBigInteger("usuario_id")->nullable();

            //set null para que no se borre en cascada
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onDelete("set null");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
