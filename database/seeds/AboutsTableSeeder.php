<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
        	'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
        	'address'			=> 'Calle J1 #19, INVI, Los Mina, Santo Domingo Este',
        	'phone'				=> '8095955568',
        	'email'				=> 'info@codekids.com',
        	'fb_link'			=> 'https://www.facebook.com/edward.palen',
        	'tw_link'			=> 'https://twitter.com/EdwardPalen',
        	'ins_link'			=> 'https://www.instagram.com/edward_palen/',
        	'in_link'			=> 'https://www.linkedin.com/in/edward-palen-thomas-5a180998/',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
