<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControllers extends Controller
{
    //
    function getUser(){
        // return "code step by step";
        return view('user');
        
    }
    function aboutUser(){
       return "Hello this is rahul kuamar"; 
    }
    function getUserName($name){
        // return "Hello this is ".$name; 
        return view('getuser',['name'=>$name]);
     }
     function adminLogin(){
        return view('admin.login');
     }
}
