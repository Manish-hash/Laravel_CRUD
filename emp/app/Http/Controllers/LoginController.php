<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
function loginSubmitted(Request $r){
    $un=$r->input('username');
    $pw=$r->input('password');
    if($un!=null){
        $r->session()->put('sun',$un);
        return view('menu');
    }
    }
    function logOUt(){
        if(session()->has('sun')){
            session()->pull('sun');
        }
        return redirect('login');
    }

    function invalidateFunction(){
        return view('invalidate');
    }
    
        
    }

