<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

//register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
//login
Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
//logout
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');


//get posts
Route::get('/', [PostController::class, 'index']);
//get one post
Route::get('/post/{post}', [PostController::class, 'show'])->whereNumber('postId');
//create new post
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->middleware('auth');
//delete a post
Route::post('/delete-post/{post}', [PostController::class, 'destroy'])->middleware('auth');
//edit a post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');
Route::post('/posts/{post}/update', [PostController::class, 'update'])->middleware('auth');

//add a comment
Route::post('/post/{post}/comment', [CommentController::class, 'store'])->middleware('auth');
//delete a comment
Route::post('/delete-comment/{comment}', [CommentController::class, 'destroy'])->middleware('auth');


//add a category

