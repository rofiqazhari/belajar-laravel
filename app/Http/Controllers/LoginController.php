<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{   
    //methode/action
    public function login(Request $parameter){
        $username = $parameter->input('user'); //bisa array
        $password = $parameter->input('pass');
        // $username = request('user'); // cara lain TANPA (Request $parameter)
        // $username = $parameter->user; //data singel
        return view('login',['usere'=>$username,'passe'=>$password]);        
    }
}
