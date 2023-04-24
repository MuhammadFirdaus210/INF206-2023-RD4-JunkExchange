@extends('layouts.secondary')

@section('container')


        <div class="hero">
            <a href="/">
                <img src="images/logo.png" style="width:10%" alt="">
            </a>
        </div>
        <div class="container-contain shadow">
            <h2 style="color:#2ABA86"><strong>Masuk</strong></h2>
            <form class="pt-3">
                <div class="mb-2">
                  <label for="email" class="form-label" style="color: #2ABA86">Email address</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                  <label for="password" class="form-label" style="color: #2ABA86">Password</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn text-white" type="submit" style="background-color: #2ABA86">Masuk</button>
                  </div>
            </form>
            <p class="text-center pt-3 text-dark-emphasis">Belum punya akun?<br>
                Daftar <a class="text-decoration-none" style="color:#2ABA86" href="/register">disini</a></p>
        </div>
  <link rel="stylesheet" href="css/login.css">
@endsection