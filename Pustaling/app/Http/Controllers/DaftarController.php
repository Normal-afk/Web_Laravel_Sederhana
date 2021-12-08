<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index(){
        return view('pustaling.daftar',["setTitle"=>"Daftar"]);
    }

    public function store(Request $request){
        dd($request->all());
    }
}
