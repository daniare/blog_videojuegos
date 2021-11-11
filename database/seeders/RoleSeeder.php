<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            "nombre_role"=>"admin"
        ]);

        $blogger= Role::create([
            "nombre_role"=>"blogger"
        ]);
    }
}
