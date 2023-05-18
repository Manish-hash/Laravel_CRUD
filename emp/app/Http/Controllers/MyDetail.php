<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDetail extends Controller
{
    function displayMyDetail(){
        $name="Manish Timalsina";
        $age=23;
        $Address="Jadibuti Kathmandu";
        $Roll_No=14;
        $College="Vedas college";
    return view("detail",["name"=>$name,"age"=>$age,"address"=>$Address,"roll"=>$Roll_No,"college"=>$College]);
    }
}
