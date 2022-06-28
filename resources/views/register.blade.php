@extends('layouts.main')

@section('container')
<main style="height: 93vh;" class="form-signin w-100 m-auto d-flex align-items-center justify-content-center">
  <form class="w-50">
    <div class="text-center">
        <img class="mb-4" src="https://i.postimg.cc/hGJJyWNz/kitty-1.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 fw-normal">Form Registrasi</h1>
        <p>Masukkan data anda dengan benar</p>
    </div>
    <div style="width: 100%; display: flex; align-items: center; flex-direction: column;">
        <div class="form-floating mb-4 w-100">
        <input type="text" class="form-control" placeholder="Nama">
        <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="text" class="form-control" placeholder="Alamat">
        <label for="floatingInput">Alamat</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="text" class="form-control" placeholder="No Hp">
        <label for="floatingInput">No Hp</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="text" class="form-control" placeholder="Username">
        <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="password" class="form-control" id="floatingPassword" placeholder="password">
        <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating mb-4 w-100">
        <input type="password" class="form-control" id="floatingPassword" placeholder="re-password">
        <label for="floatingPassword">Re-Password</label>
        </div>
        <div class="w-100 d-flex">
        <button style="margin-right: 10px;" class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Batal</button>
        </div>
    </div>
</form>
</main>
@endsection