<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('name')){
            return view('home');
        }else{
            $request->session()->flash('error','Unauthorized Access');
            return redirect('admin');
        }
        
        
    }
    
    public function lang($locale){

        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
