<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//redirection of an url
route::redirect('/', '/home');


//calling controllers with routes
Route::get('/about/{name}', [UserController::class, 'aboutUser']);
Route::get('/home', [UserController::class, 'home']);


Route::view('/user-form','user-form');
Route::post('/adduser', [UserController::class, 'addUser']);