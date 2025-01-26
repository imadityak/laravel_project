<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//making function here only
Route::get('/', function () {
    return view('welcome');
});


//or you can only open view like this
// Route::view('/home', 'home');


//redirection of an url
route::redirect('/home', '/');

//dynamic routing
Route::get('/about/{name}', function($name){
    return view('about', ['name'=>$name]);
});

//calling controllers with routes
Route::get('/user', [UserController::class, 'getUser']);
Route::get('/about', [UserController::class, 'aboutUser']);
Route::get('/user/{name}', [UserController::class, 'username']);
Route::get('/admin', [UserController::class, 'admin']);