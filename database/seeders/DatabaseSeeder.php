<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      User::query()->delete();
      Post::query()->delete();
      Category::query()->delete();
      Comment::query()->delete();

      $firstUser = User::factory()->create([
         'name' => 'mejdi',
         'username' =>'mejdi5',
         'email' => 'mejdi@gmail.com',
         'password' => bcrypt('abcdefgh')
      ]);

      $secondUser = User::factory()->create([
         'name' => 'ahmed',
         'username' =>'ahmed123',
         'email' => 'ahmed@gmail.com',
         'password' => bcrypt('abcdefgh')
      ]);

      $thirdUser = User::factory()->create([
         'name' => 'mohamed',
         'username' =>'mohamed123',
         'email' => 'mohamed@gmail.com',
         'password' => bcrypt('abcdefgh')
      ]);

      $sports = Category::create([
         'name' => 'SPORTS',
         'slug' => 'sports',
      ]);

      $news = Category::create([
          'name' => 'NEWS',
          'slug' => 'news',
       ]);

       $science = Category::create([
          'name' => 'SCIENCE',
          'slug' => 'science',
       ]);


      $firstUserPosts = Post::factory(3)->create([
         'user_id' => $firstUser->id,
         'category_id' => $news->id
      ]);

      $secondUserPost = Post::factory()->create([
         'user_id' => $secondUser->id,
         'category_id' => $sports->id
      ]);

      $thirdUserPost = Post::factory()->create([
         'user_id' => $thirdUser->id,
         'category_id' => $science->id
      ]);

      Comment::factory()->create([
         'user_id' => $secondUser->id,
         'post_id' =>  $firstUserPosts[0]->id
      ]);

      Comment::factory()->create([
         'user_id' => $thirdUser->id,
         'post_id' =>  $firstUserPosts[0]->id
      ]);

      Comment::factory()->create([
         'user_id' => $thirdUser->id,
         'post_id' =>  $firstUserPosts[1]->id
      ]);

      Comment::factory()->create([
         'user_id' => $firstUser->id,
         'post_id' =>  $thirdUserPost->id
      ]);

      Comment::factory()->create([
         'user_id' => $thirdUser->id,
         'post_id' =>  $secondUserPost->id
      ]);
    }
}
