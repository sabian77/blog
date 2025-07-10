<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard Page']);
});

Route::get('/posts', function () {
    $posts = Post::getAllCustom();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{slug}', function ($slug) {

    $post = Post::find($slug);

    return view('post', ['title' => 'Single post', 'post' => $post]);
});



Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/about', function () {
    return view('about' , ['title' => 'About Page']);
});
