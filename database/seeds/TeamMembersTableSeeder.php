<?php

use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

    	DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('team_members')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'job_title'			=> $faker->jobTitle,
            'likes'				=> 'Estudiar',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'fb_link'			=> '#',
            'tw_link'			=> '#',
            'ins_link'			=> '#',
            'in_link'			=> '#',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
