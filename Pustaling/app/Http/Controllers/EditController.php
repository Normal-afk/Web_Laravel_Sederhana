<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function index($id){
         $edit_book = DB::table('books')->where('id',$id)->first();

        return view('pustaling.edit',[
            "setTitle"=>"Edit Buku",
            "book"=>$edit_book
        ]);
    }
}
