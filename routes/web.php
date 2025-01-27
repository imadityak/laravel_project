<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//making function here only
Route::get('/', function () {
    return view('welcome');
});


//or you can only open view like this
// Route::view('/', 'home');


//redirection of an url
route::redirect('/', '/home');

//dynamic routing
Route::get('/about/{name}', function($name){
    return view('about', ['name'=>$name]);
});

Route::view('/inner','common.inner');

//calling controllers with routes
Route::get('/about/{name}', [UserController::class, 'aboutUser']);
Route::get('/home', [UserController::class, 'home']);