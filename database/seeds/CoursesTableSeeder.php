<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name'      	    => 'Introducción a Arduino',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '1',
            'group_id'			=> '1',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('courses')->insert([
            'name'      	    => 'Intro a programación',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '2',
            'group_id'			=> '3',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('courses')->insert([
            'name'      	    => 'Desarrollo de apps',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '3',
            'group_id'			=> '4',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('courses')->insert([
            'name'      	    => 'Programación y robótica',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '4',
            'group_id'			=> '4',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('courses')->insert([
            'name'      	    => 'Kinder',
            'description'		=> 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '5',
            'group_id'			=> '1',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('courses')->insert([
            'name'              => 'Robótica para drones',
            'description'       => 'is simply dummy text of the printing and typesetting industry.',
            'course_id'         => '4',
            'group_id'          => '4',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
