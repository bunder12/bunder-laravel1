@extends('layouts.main')

@section('container')
<main style="height: 80vh;" class="form-signin w-100 m-auto d-flex align-items-center justify-content-center">
  <form>
    <div class="text-center">
        <img class="mb-4" src="https://i.postimg.cc/hGJJyWNz/kitty-1.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Selamat Datang</h1>
        <p>Silahkan masukkan username dan password</p>
    </div>
    <div style="width: 100%; display: flex; align-items: center; flex-direction: column;">
        <div class="form-floating mb-4 w-100">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
        <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="password" class="form-control" id="floatingPassword" placeholder="password">
        <label for="floatingPassword">Password</label>
        </div>
        <div class="w-100">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </div>
    </div>  
</form>
</main>
@endsection