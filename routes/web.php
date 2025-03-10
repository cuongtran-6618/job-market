<?php

declare(strict_types=1);

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

################### Router for user ########################

// Register route, name can be used to call in blade
Route::get('/user/register', [UserController::class, 'register'])->name('user.register');

// creat a new user route
Route::post('/user/create', [UserController::class, 'create'])->name('user.create');

// delete an user route
Route::delete('/user/{user}/delete', [UserController::class, 'delete'])->name('user.delete');

//Login route
Route::get('/login', function () {return view('login');})->name('user.login');

// User list route
Route::get('/user', [UserController::class, 'index'])->name('user.index');


################### Router for post ########################

// List of jobs
Route::get('/post', [PostController::class, 'index'])->name('post.index');

// Create a new job
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
