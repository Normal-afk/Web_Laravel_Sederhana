@extends('templates\main')

@section('navbar')
    @include('templates.partials.navbar')
@endsection

@section('content')
  <div class="container">
    <div class="title text-center">
      <h1>Pustaling</h1>
      <span>Perpustakaan Keliling</span>
    </div>
    <div class="searchbar">
      <form class="d-flex mx-auto" style="width: 80%">
        <input class="form-control me-2" style="height:50px; width:85%" type="search" placeholder="Cari Buku.." aria-label="Search">
        <button class="btn btn-outline-success cari-btn" style="width:15%" type="submit">Cari</button>
      </form>
    </div>
  </div>
@endsection