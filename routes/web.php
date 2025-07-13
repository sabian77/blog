<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard Page']);
});

Route::get('/posts', function () {
    $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts ]);
});

//membuat ketika diklik maka akan diarahkan ke halaman post dengan route model binding
Route::get('/posts/{post:slug}', function (Post $post) {
    

    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/about', function () {
    return view('about' , ['title' => 'About Page']);
});
