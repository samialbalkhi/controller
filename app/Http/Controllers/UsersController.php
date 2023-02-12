<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getname(){

        return view("users");
    }
    public function getuser(){
        
        return view("users");
    }
    public function getitms(){
        
        return view("users");
    }
    public function show(){
        
        return view("users");
    }
    public function name(){
        
        return view("users");
    }
    public function __construct()
    {
        $this->middleware('auth'); 
    }

}
