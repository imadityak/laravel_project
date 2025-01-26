<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return "Aditya Kumar";
    }
    function aboutUser($name){
        return view('about',['name'=>$name]);
    }
    function home(){
        if(View::exists('home')){
            //variable
            $name = "Kapil";
            //array
            $users = ['Adam','Bob','Casey','Donald'];
        return view('home',['n'=>$name, 'array'=>$users]);
        }else{
            echo "No view found";
        }
    }
}
