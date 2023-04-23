<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function session_set(Request $request){
        $request->session()->put('name','Abhishek');
    }
    public function login(){
        return view('admin.login');
    }
    public function adminlogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');

        if($email=='admin@gmail.com' && $password=='123456789'){
            $request->session()->put('name','Abhishek');
            return redirect('/');
        }
        else{
            $request->session()->flash('error','Invalid Credentials. Enter valid login details.');
            return redirect('admin');
        }
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
