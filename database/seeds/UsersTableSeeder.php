<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'Super',
            'last_name'         => 'Admin',            
            'gender'            => 'H',
            'birthdate'         => new DateTime,
            'job_title'         => 'Administración de sistema',
            'likes'             => '',
            'description'       => 'Lorem Ipsum has been the industry.',
            'address'           => '',
            'province_id'       => 31,
            'phone'             => '',
            'email'             => 'super.admin@codekids.com.do',
            'fb_link'           => '#',
            'tw_link'           => '#',
            'ins_link'          => '#',
            'in_link'           => '#',
            'avatar'            => '1.jpg',
            'active'            => 1,
            'password'          => bcrypt('123456'),
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('users')->insert([
            'name'              => 'Wanda',
            'last_name'         => 'Castillo',
            'gender'            => 'M',
            'birthdate'         => '1976-05-12',
            'job_title'         => 'Administración de sistema',
            'likes'             => '',
            'description'       => 'Lorem Ipsum has been the industry.',
            'address'           => 'Calle J1 #19, INVI, Los Mina',
            'province_id'       => 31,
            'phone'             => '8098496151',
            'email'             => 'wanda.castillo@codekids.com.do',
            'fb_link'           => '#',
            'tw_link'           => '#',
            'ins_link'          => '#',
            'in_link'           => '#',
            'avatar'            => '2.png',
            'active'            => 1,
            'password'          => bcrypt('123456'),
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('users')->insert([
            'name'              => 'Edward Joel',
            'last_name'         => 'Palen Thomas',
            'gender'            => 'H',
            'birthdate'         => '1978-10-03',
            'job_title'         => 'Administración de sistema',
            'likes'             => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'address'           => 'Calle J1 #19, INVI, Los Mina',
            'province_id'       => 31,
            'phone'             => '8298722101',
            'email'             => 'edward.palen@codekids.com.do',
            'fb_link'           => 'https://www.facebook.com/edward.palen',
            'tw_link'           => 'https://twitter.com/EdwardPalen',
            'ins_link'          => 'https://www.instagram.com/edward_palen/',
            'in_link'           => 'https://www.linkedin.com/in/edward-palen-thomas-5a180998/',
            'git_link'          => 'https://github.com/epalen',
            'avatar'            => '3.jpg',
            'active'            => 1,
            'password'          => bcrypt('123456'),
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
        DB::table('users')->insert([
            'name'              => 'Julio Cesar',
            'last_name'         => 'Palen Thomas',
            'gender'            => 'H',
            'birthdate'         => '1972-11-29',
            'job_title'         => 'Administración de sistema',
            'likes'             => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'description'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'address'           => 'Calle J1 #19, INVI, Los Mina',
            'province_id'       => 31,
            'phone'             => '8298722101',
            'email'             => 'julio.palen@codekids.com.do',
            'fb_link'           => 'https://www.facebook.com/edward.palen',
            'tw_link'           => 'https://twitter.com/EdwardPalen',
            'ins_link'          => 'https://www.instagram.com/edward_palen/',
            'in_link'           => 'https://www.linkedin.com/in/edward-palen-thomas-5a180998/',
            'git_link'          => 'https://github.com/epalen',
            'avatar'            => '4.jpg',
            'active'            => 1,
            'password'          => bcrypt('123456'),
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
