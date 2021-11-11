<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre_usuario"=>$this->faker->unique()->word(),
            "nombre"=>$this->faker->word(),
            "apellidos"=>$this->faker->word(),
            "email"=>$this->faker->safeEmail(),
            "password"=>$this->faker->randomElement(["password"]),
        ] ;

        
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    
}
