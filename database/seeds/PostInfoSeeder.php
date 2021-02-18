<?php

use Illuminate\Database\Seeder;
use App\PostInfo;
use Faker\Generator as Faker;
use App\Post;

class PostInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $postIds = Post::pluck('id');
        foreach ($postIds as $id) {
           $postInfo = new PostInfo();
           $postInfo->post_id = $id;
           $postInfo->post_status = $faker->randomElement(['public', 'private', 'draft']);
           $postInfo->comment_status = $faker->randomElement(['open', 'private', 'closed']);
           $postInfo->content = $faker->text(200);
           $postInfo->save();
        }
        
    }
}
