<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name'      	    => 'Baby Code',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('groups')->insert([
            'name'      	    => 'Junior Code',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('groups')->insert([
            'name'      	    => 'Medium Code',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('groups')->insert([
            'name'      	    => 'Master Code',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
