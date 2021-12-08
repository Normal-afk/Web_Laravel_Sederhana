@extends('templates.main')

@section('content')
    <div class="container">
        <h1 class="reg-title">Selamat Datang di Pustaling</h1>
        <div class="wrapper content">
            <form class="form-signin rounded-4">
                @csrf
               <h2 class="form-signin-heading text-center">Login</h2>
               <input type="email" class="form-control mt-3 rounded-3" name="email" placeholder="Alamat Email" value="" />
               <input type="password" class="form-control mt-4 rounded-3" name="password" placeholder="Password" required=""/>      
               <button class="btn btn-lg btn-primary btn-block" style="width: 100%" type="submit">Login</button>   

                <p class="my-3">Belum Mendaftar? Silahkan <a href="daftar">Daftar</a></p>
            </form>
         </div>
    </div>
@endsection