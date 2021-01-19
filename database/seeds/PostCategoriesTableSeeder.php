<?php

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('post_categories')->insert([
            'name'      	    => 'Arduino',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('post_categories')->insert([
            'name'      	    => 'Cencias de la computación',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('post_categories')->insert([
            'name'      	    => 'Desarrollo de apps',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('post_categories')->insert([
            'name'      	    => 'Programación y robótica',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('post_categories')->insert([
            'name'      	    => 'Kinder',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
