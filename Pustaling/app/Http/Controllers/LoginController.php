<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
            return view('pustaling.login',["siteTitle" => "Login"]);
    }

    public function store(Request $request){
        // dd($request -> all());
    }
}
