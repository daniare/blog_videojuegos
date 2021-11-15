<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("categoria_id");
            $table->unsignedBigInteger("post_id");

            $table->foreign("categoria_id")->references("id")->on("categorias")->onDelete("cascade");
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
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
        Schema::dropIfExists('categoria_post');
    }

    
}
