<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // seleziono i post pubblici 
        $posts = Post::where('published', 1)->get(); 
        // ciclo sui posts
        foreach ($posts as $post) {
            for ($i=0; $i < rand(0, 3); $i++) { 
               $newComment = new Comment(); 
               $newComment->post_id = $post->id;
               // 4. in caso di colonna nullable
               if (rand(0,1)) {
                $newComment->name = $faker->name();
            }
               $newComment->content = $faker->text();
               $newComment->save();
            }
        }

    }
}
