<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])
    -> name('home');
Route::get('/posts', [MainController :: class, 'posts'])
    -> name('posts');