<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('sponsors')->insert([
            'name'				=> $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> $faker->titleMale,
            'job_title'			=> $faker->jobTitle,
            'company'			=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
