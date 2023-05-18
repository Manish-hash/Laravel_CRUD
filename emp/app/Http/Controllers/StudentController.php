<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function generateRandomPass(){
        $length=rand(8,12);
        $password='';
        $char='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+-={}[]|\\:;"\'<>,.?/';
        $charArray = str_split($char); // convert string to array of characters
        foreach (range(1, $length) as $i) {
            $password .= $charArray[rand(0, count($charArray) - 1)];
        }
        return $password;
    }

   // echo generateRandomPass();


   
}
