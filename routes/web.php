<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// This is the Home route you already set up
Route::get('/', function () {
    return view('home'); 
})->name('home'); 

// Update the placeholder route to load your new about.blade.php
Route::get('/about', function () {
    return view('about'); 
})->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/services', function () {
    return view('services'); 
})->name('services');

Route::get('/gallery', function () {
    return 'This is the Gallery Page (Coming Soon!)'; 
})->name('gallery');