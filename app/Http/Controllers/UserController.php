<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    function addUser(Request $req){
        $req->validate([
            'username'=>'required | min:3 | max:15',
            'email'=>'required | email',
            'age'=>'required',
            'skills'=>'required',
            'gender'=>'required',
            'city'=>'required'
        ]);
        echo "Username is $req->username <br>";
        echo "City is $req->city<br>";
        echo "Email is $req->email<br>";
        print_r($req->skill);
        echo "<br> Age is $req->age<br>";
        echo "Gender is $req->gender<br>";
    }
    // function getUser(){
    //     return "Aditya Kumar";
    // }
    // function aboutUser($name){
    //     return view('about',['name'=>$name]);
    // }
    // function home(){
    //     if(View::exists('home')){
    //         //variable
    //         $name = "Kapil";
    //         //array
    //         $users = ['Adam','Bob','Casey','Donald'];
    //     return view('home',['n'=>$name, 'array'=>$users]);
    //     }else{
    //         echo "No view found";
    //     }
    // }
}
