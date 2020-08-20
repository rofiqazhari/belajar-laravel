<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{   
    public function login(Request $parameter){
        $username = $parameter->input('user'); //bisa array
        $password = $parameter->input('pass');
        // $username = request('user'); // cara lain TANPA (Request $parameter)
        // $username = $parameter->user; //data singel
        return view('login');        
    }

    //methode/action insert LOGIN
    public function login_act(Request $parameter){
        $username = $parameter->input('user'); //bisa array
        $password = $parameter->input('password');
        if($username=='admin' AND $password=='salma'){
            return view('dashboard',['infoe'=>'Alhamdulillah berhasil login']);
        }else{
            return view('login',['infoe'=>'Ngapunten user atau password jenengan klentu !']);
        }        
        
    }
}
