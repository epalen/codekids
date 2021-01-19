<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Usuario',
            'Editor'
        ];

        foreach ($roles as $rol) {
            Role::create([
                'name' => $rol,
                'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
            ]);
        }
    }
}
