<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard Page']);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

//membuat ketika diklik maka akan diarahkan ke halaman post dengan route model binding
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => 'Kategori: '. $category->name, 'posts' => $category->posts]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => 'Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/about', function () {
    return view('about' , ['title' => 'About Page']);
});
