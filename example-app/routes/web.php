<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('front.index');
})->name('home');

Route::get('/about-us',function(){
    return view('front.about-us');
})->name('about-us');

Route::get('/blog-grid',function(){
 return view('front.blog-grid');
})->name('blog-grid');
Route::get('/blog-detail',function(){
return view('front.blog-detail');
})->name('blog-detail');

Route::get('/classes',function(){
return view('front.classes');
})->name('classes');

Route::get('/teachers',function(){
    return view('front.teachers');
    })->name('teachers');

 Route::get('/gallary',function(){
        return view('front.gallery');
        })->name('gallery');

Route::get('/contact',function(){
    return view('front.contact');
})->name('contact');

Route::prefix('admin')->group(function(){
 Route::get('index',function(){
    return view('back.index');
 })->name('index');
 Route::get('/icons',function(){
    return view('back.icons');
 })->name('icons');
});

