<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // populate posts table with some posts - let's say 3 posts
        
        for($i = 0; $i < 3; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->text(50);
            $newPost->subtitle = $faker->text(10);
            $newPost->author = $faker->name();
            $newPost->content = $faker->text(2000);
            $newPost->publication_date = $faker->dateTime();
            $newPost->save();
        }
    }
}
