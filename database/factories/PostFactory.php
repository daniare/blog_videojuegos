<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titulo" => $this->faker->sentence(),
            "descripcion" => $this->faker->sentence(),
            "contenido" => $this->faker->paragraph(50),
            "imagen_cabecera" => $this->faker->randomElement(["img1","img2"])

        ];
    }
}
