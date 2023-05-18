<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    function displayEmpPage(){
        return "Welcome you all in laravel Project";
}

function displayEmpBlade(){
    $company="conding tech";
    $name="My name is manish timalsina";

    $fruits=array("mango","banana","apple","orange");
    return view("emp",["comp"=>$company,"name"=>$name,"fruits"=>$fruits]);
}

function viewEmployee(){
    return view("employee");
}
function saveEmployee(Request $r){
    $e= new Employee;
    $e->firstName=$r->input("firstName");
    $e->lastName=$r->input("lastName");
    $e->salary=$r->input("salary");
    $e->age=$r->input("age");
    $e->email=$r->input("email");
    $e->save();
    return view("employee");

}
function listEmployee(){
    $emps = Employee::all();
    return view('list', ['emps'=>$emps]); 
}

function delEmpId($id){
    $emp = Employee::find($id);
    $emp->delete();
    return redirect('list');//redirect handa query lakhna pardaina

}
function updEmpId($id){
    $emp = Employee::find($id);
    return view('update',['e'=>$emp]);
}
function updEmpIdPost(Request $r){//form submit garda request garna parxa
    $id = $r->input('id');
    $emp = Employee::find($id);
    // echo $emp->firstName;
    $emp->firstName = $r->input("firstName");
    $emp->lastName = $r->input("lastName");
    $emp->salary = $r->input("salary");
    $emp->age = $r->input("age");
    $emp->email = $r->input("email");
    $emp->save();
    return redirect('list');
}

function listempdata(){
    $emps=Employee::all();
    return $emps;
}
function employeeId($id){
    $emp=Employee::find($id);
    return $emp;

    

}

//template

function templateHome(){
    return view('home');
}

function templateAbout(){
    return view('about');
}
}
 