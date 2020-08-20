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
        return view('login',['usere'=>$username,'passe'=>$password]);        
    }

    //methode/action insert LOGIN
    public function login_act(Request $parameter){
        $username = $parameter->input('user'); //bisa array
        $password = $parameter->input('password');
        // $username = request('user'); // cara lain TANPA (Request $parameter)
        // $username = $parameter->user; //data singel
        //return view('login',['usere'=>$username,'passe'=>$password]);        
        return view('login',['infoe'=>'Alhamdulillah berhasil login','usere'=>$username,'passe'=>$password]);
    }
}
