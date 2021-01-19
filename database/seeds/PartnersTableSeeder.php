<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

        DB::table('partners')->insert([
            'name'				=> $faker->company,
            'phone'				=> $faker->tollFreePhoneNumber,
            'email'				=> $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('partners')->insert([
            'name'              => $faker->company,
            'phone'             => $faker->tollFreePhoneNumber,
            'email'             => $faker->email,
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever.',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
