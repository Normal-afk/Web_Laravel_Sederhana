@extends('templates.main')

@section('navbar')
    @include('templates.partials.navbar')
@endsection

@section('content')
<div class="container-fluid home-page">
    <div class="container">
        <div class="data-buku">
            <h1>Data Buku</h1>
            <form class="d-flex mx-auto my-5" style="width: 80%">
                <input class="form-control me-2 search-box" type="search" placeholder="Cari Buku.." aria-label="Search">
                <button class="btn cari-btn" type="submit">Cari</button>
            </form>
        </div>
        
        {{-- Tabel Data Buku --}}
        <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Tahun Terbit</th>
              </tr>
            </thead>
            <tbody>
              <!-- Loop sebanyak jumlah data -->
              @foreach ($books as $book)
              <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->publication_year}}</td>
                <td>
                  <a href="/edit{{ $book->id }}" style="text-decoration:none">Edit</a>
                </td>
                <td><a href="/buku{{ $book->id }}" style="text-decoration:none">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <a class="btn btn-primary" href="tambah">Tambah Buku</a>
    </div>
</div>
@endsection