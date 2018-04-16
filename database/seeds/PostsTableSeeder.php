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
        factory(App\Post::class, 300)->create()->each(function(App\Post $post){//como parametro el post creado
            $post->tags()->attach([ //attach para relacionar post con etiqueta
                rand(1,5),
                rand(6,14),
                rand(15,20)
            ]);
        });
    }
}
