<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //all posts
    public function index () {
        return view('posts.index', [
            'posts'=> Post::latest()->with('category', 'author')->search(request(['search', 'category', 'author']))->get(),
            'currentCategory' => Category::get()->firstWhere('slug' , request(['category'][0])),
            'currentAuthor' => User::get()->firstWhere('username' , request(['author'][0])),
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    //one post
    public function show (Post $post) {   //route model binding
        if (! isset($post)) {
            return abort(404);
        };
        return view('posts.show', [ 
            'post' => $post,
            'comments' => Comment::latest()->get()->where('post_id', $post->id),
          ]);
    }

    //new post
    public function create () {   
        return view('posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store() {
        request()->validate([
            'title' => 'required',
            'excerpt' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:50'],
        ]);
        Post::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body'),
            'user_id' => auth()->user()->id,
            'category_id' => request('category'),
        ]);
        return redirect('/')->with('success', 'post added with success');
    }

    //delete post
    public function destroy(Post $post) {
        $post->destroy($post->id);
        return redirect('/')->with('success', 'post deleted');
    }

    //edit post
    public function edit (Post $post) {   
        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    public function update (Post $post) {   
        $attributes = request()->validate([
            'title' => 'required',
            'excerpt' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:50'],
        ]);
        $post->update([
            'title' => $attributes['title'],
            'excerpt' => $attributes['excerpt'],
            'body' => $attributes['body'],
            'category_id' => request('category')
        ]);
        return redirect("/post/$post->id")->with('success', 'post updated');
    }
}
