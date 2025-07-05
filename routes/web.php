<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Dashboard Page']);
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about' , ['title' => 'About Page']);
});
