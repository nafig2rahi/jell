<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sample;
class HomeController extends Controller
{
    public function register(){
	return view('register');
}

    public function store(Request $req){
    $validatedData = $req->validate([
        'name' => 'required',
        'username' => 'required|unique:samples,username',
        'email' => 'required|unique:samples,email',
        'salary' => 'required|integer|between:200,1000',
        'birthday' => 'required|date',
        'gender' => 'required',
        'password' => 'required|min:4',
        'confirm_password' => 'required|same:password',
    ]);
$obj=new Sample();
$obj->name=$req->name;
$obj->username=$req->username;
$obj->email=$req->email;
$obj->password=$req->password;
$obj->salary=$req->salary;
$obj->birthday=$req->birthday;
if($obj->save()){
	return redirect()->back()->with('msg','Insert Successfully');
}
else{
	return redirect()->back();
}
}

}
