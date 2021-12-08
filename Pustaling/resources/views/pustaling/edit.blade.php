@extends('templates.main')

@section('navbar')
    @include('templates.partials.navbar')
@endsection

@section('content')
<div class="container">
    <h1 class="reg-title">Edit Buku</h1>
    <form class="form-signin rounded-4 mt-4" action="{{url('buku')}}" method="POST" enctype="multipart/form-data">
        @csrf
       <input type="text" class="form-control mt-5 rounded-3" name="title" placeholder="Judul Buku" value="{{ $book->title }}" />
       <input type="text" class="form-control mt-4 rounded-3" name="author" placeholder="Penulis Buku" value="{{ $book->author }}"/>      
       <input type="text" class="form-control mt-4 rounded-3" name="publication_year" placeholder="Tahun Terbit" value="{{ $book->publication_year }}"/>    
       <div class="mt-4 mb-3">
        <label for="formFile" class="form-label">Pilih Gambar Buku</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>     
       <button class="btn btn-lg btn-primary btn-block mt-4" style="width: 100%" type="submit">Simpan</button>   
    </form>
</div>
@endsection