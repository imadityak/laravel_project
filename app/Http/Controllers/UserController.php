<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function getUser(){
        return "Aditya Kumar";
    }
    function aboutUser(){
        return "Hello i am a calm person";
    }
    function username($name){
        return view('user',['name'=>$name]);  
    }
    function admin(){
        if(View::exists('admin.login')){
            //variable
            $name = "Kapil";
            //array
            $users = ['Adam','Bob','Casey','Donald'];
        return view('admin.login',['n'=>$name, 'array'=>$users]);
        }else{
            echo "No view found";
        }
    }
}
