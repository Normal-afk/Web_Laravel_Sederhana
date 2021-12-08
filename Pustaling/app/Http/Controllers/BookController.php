<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pustaling.buku',[
            "setTitle"=>"Buku",
            "books"=>Book::all()            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // menyimpan file kedalam folder storage
        $request->file('image')->store('book-images');

        // insert data kedalam database
        DB::table('books')->insert([
            'title' => $request->title,
            'author' => $request->author,
            'publication_year' => $request->publ_year
        ]);

        // return view buku beserta variabel setTitle dan data buku dari model Buku
        return view('pustaling.buku',[
            "setTitle"=>"Buku",
            "books"=>Book::all()            
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::table('books')->where('id',$id);

        // menampilkan view buku sekaligus mengirimkan data-data buku pada model Book
        return view('pustaling.buku',[
            "setTitle"=>"Buku",
            "books"=>Book::all()     
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('books')->where('id', $id)->delete();

           // menampilkan view buku sekaligus mengirimkan data-data buku pada model Book
        return view('pustaling.buku',[
            "setTitle"=>"Buku",
            "books"=>Book::all()            
        ]);
    }
}
