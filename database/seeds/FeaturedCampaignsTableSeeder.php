<?php

use Illuminate\Database\Seeder;

class FeaturedCampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_campaigns')->insert([
            'campaign_id'		=> '1',
            'status'			=> 1,
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
