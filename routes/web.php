<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{category?}', function ($category = null) {
    $posts = Post::all(); 
    $categories = $posts->pluck('category');
    if (isset($category)) {
        $posts = Post::all()->where('category', '=', $category); 
    };
    return view('posts', [
        'posts'=> $posts,
        'categories' => $categories
    ]);
});


Route::get('/post/{post}', function (Post $post) { //route model binding
   return view('post', [ 'post' => $post ]);
})->whereNumber('postId');
