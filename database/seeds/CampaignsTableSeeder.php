<?php

use Illuminate\Database\Seeder;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            'title'      	    => 'Campamento Invierno 2019',
            'subtitle'          => 'Auspicia un cambio hoy',
            'group_id'			=> '2',
            'course_id'			=> '2',
            'description'		=> 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'goal'		        => '300',
            'avatar'            => '1547170279.jpeg',
            'start_date'		=> '2019-12-05',
            'end_date'			=> '2019-12-22',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('campaigns')->insert([
            'title'             => 'Campamento Verano 2019',
            'subtitle'          => 'Auspicia un cambio hoy',
            'group_id'          => '2',
            'course_id'         => '2',
            'description'       => 'Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'goal'              => '300',
            'avatar'            => '1547170146.jpeg',
            'start_date'        => '2019-06-01',
            'end_date'          => '2019-06-30',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
