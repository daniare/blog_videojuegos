<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        Usuario::factory(15)->create();
        Post::factory(25)->create();
        

    }
}
