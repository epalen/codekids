<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'      	    => 'Lorem Ipsum 1',
            'slug'              => 'lorem-ipsum-1',
            'content'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed consectetur lacus. Pellentesque laoreet dolor orci, sed ullamcorper nisl consectetur finibus. Ut tortor elit, elementum rutrum enim a, posuere sollicitudin purus. Cras at maximus magna, non eleifend augue. Phasellus ac dictum mi. Praesent iaculis venenatis nulla, accumsan malesuada purus. Maecenas nec libero aliquet, rhoncus nisl vitae, convallis mauris. Maecenas et sem quis risus viverra commodo.',
            'category_id'       => '1',
            'user_id'           => '2',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('posts')->insert([
            'title'             => 'Lorem Ipsum 2',
            'slug'              => 'lorem-ipsum-2',
            'content'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed consectetur lacus. Pellentesque laoreet dolor orci, sed ullamcorper nisl consectetur finibus. Ut tortor elit, elementum rutrum enim a, posuere sollicitudin purus. Cras at maximus magna, non eleifend augue. Phasellus ac dictum mi. Praesent iaculis venenatis nulla, accumsan malesuada purus. Maecenas nec libero aliquet, rhoncus nisl vitae, convallis mauris. Maecenas et sem quis risus viverra commodo.',
            'category_id'       => '1',
            'user_id'           => '2',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('posts')->insert([
            'title'             => 'Lorem Ipsum 3',
            'slug'              => 'lorem-ipsum-3',
            'content'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed consectetur lacus. Pellentesque laoreet dolor orci, sed ullamcorper nisl consectetur finibus. Ut tortor elit, elementum rutrum enim a, posuere sollicitudin purus. Cras at maximus magna, non eleifend augue. Phasellus ac dictum mi. Praesent iaculis venenatis nulla, accumsan malesuada purus. Maecenas nec libero aliquet, rhoncus nisl vitae, convallis mauris. Maecenas et sem quis risus viverra commodo.',
            'category_id'       => '1',
            'user_id'           => '2',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('posts')->insert([
            'title'             => 'Lorem Ipsum 4',
            'slug'              => 'lorem-ipsum-4',
            'content'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed consectetur lacus. Pellentesque laoreet dolor orci, sed ullamcorper nisl consectetur finibus. Ut tortor elit, elementum rutrum enim a, posuere sollicitudin purus. Cras at maximus magna, non eleifend augue. Phasellus ac dictum mi. Praesent iaculis venenatis nulla, accumsan malesuada purus. Maecenas nec libero aliquet, rhoncus nisl vitae, convallis mauris. Maecenas et sem quis risus viverra commodo.',
            'category_id'       => '1',
            'user_id'           => '2',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);

        DB::table('posts')->insert([
            'title'             => 'Lorem Ipsum 5',
            'slug'              => 'lorem-ipsum-5',
            'content'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed consectetur lacus. Pellentesque laoreet dolor orci, sed ullamcorper nisl consectetur finibus. Ut tortor elit, elementum rutrum enim a, posuere sollicitudin purus. Cras at maximus magna, non eleifend augue. Phasellus ac dictum mi. Praesent iaculis venenatis nulla, accumsan malesuada purus. Maecenas nec libero aliquet, rhoncus nisl vitae, convallis mauris. Maecenas et sem quis risus viverra commodo.',
            'category_id'       => '1',
            'user_id'           => '2',
            'created_at'        => new DateTime,
            'updated_at'        => new DateTime,
        ]);
    }
}
