<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Post;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user = User::factory()->create([
         'name' => 'mejdi',
         'username' =>'mejdi5'
      ]);
      Post::factory(5)->create([
         'user_id' => $user->id
      ]);
      /*
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create([
         'name' => 'mejdi',
         'email'=> 'mejdi@gmail.com',
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

         $history = Category::create([
            'name' => 'HISTORY',
            'slug' => 'history',
         ]);

         $science = Category::create([
            'name' => 'SCIENCE',
            'slug' => 'science',
         ]);

         POST::create([
            'user_id' => $user->id,
            'category_id' => $sports->id,
            'title' => 'first post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est ipsa, molestiae officia laboriosam impedit. Sequi in odio quae quo obcaecati facere saepe, tempora vero impedit mollitia libero quam laborum.'
         ]);

         POST::create([
            'user_id' => $user->id,
            'category_id' => $news->id,
            'title' => 'second post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est ipsa, molestiae officia laboriosam impedit. Sequi in odio quae quo obcaecati facere saepe, tempora vero impedit mollitia libero quam laborum.'
         ]);

         POST::create([
            'user_id' => $user->id,
            'category_id' => $science->id,
            'title' => 'third post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est ipsa, molestiae officia laboriosam impedit. Sequi in odio quae quo obcaecati facere saepe, tempora vero impedit mollitia libero quam laborum.'
         ]);

         POST::create([
            'user_id' => $user->id,
            'category_id' => $history->id,
            'title' => 'fourth post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam est ipsa, molestiae officia laboriosam impedit. Sequi in odio quae quo obcaecati facere saepe, tempora vero impedit mollitia libero quam laborum.'
         ]);
         */
    }
}
