<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $postIds = Post::pluck('id');
        foreach ($postIds as $id) {
            $i = $faker->randomElement([1,2,3,4]);
            for ($j = 0; $j < $i; $j++) {
                $newComment = new Comment();
                $newComment->post_id = $id;
                $newComment->author = $faker->name();
                $newComment->comment_date = $faker->dateTime();
                $newComment->content = $faker->text(100);
                $newComment->save();
            }
        }
    }
}
