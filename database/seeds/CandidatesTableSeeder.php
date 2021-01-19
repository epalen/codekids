<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('candidates')->insert([
            'name'      	    => $faker->firstNameMale ,
            'last_name'			=> $faker->lastName,
            'gender'			=> 'M',
            'birthdate'			=> $faker->date($format = 'Y-m-d', $max = 'now'),
            'likes'				=> 'Estudiar',
            'talent'			=> 'Cantar',
            'wishes'			=> 'Desarrollar juegos',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'father_name'		=> $faker->firstNameMale,
            'f_doc_id'          => $faker->ean13,
            'f_phone'           => $faker->phoneNumber,
            'f_email'           => $faker->email,
            'mother_name'		=> $faker->firstNameFemale,
            'm_doc_id'          => $faker->ean13,
            'm_phone'           => $faker->phoneNumber,
            'm_email'           => $faker->email,
            'family_income'		=> $faker->numberBetween($min = 1000, $max = 15000),
            'address'			=> $faker->address,
            'city'				=> $faker->city,
            'phone'             => $faker->phoneNumber,
            'ailment'           => 'No tiene',
            'medicines'         => 'No tiene',
            'group_id'			=> 3,
            'course_id'			=> 3,
            'goal'              => '300',
            'active'            => 1,
            'avatar'            => '1545777712.jpeg',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
