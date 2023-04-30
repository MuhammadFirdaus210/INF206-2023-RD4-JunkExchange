@extends('layouts.secondary')

@section('container')

        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="buutom" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <div class="hero">
            <a href="/">
                <img src="images/thumbnail.png" style="width:10%" alt="">
            </a>
        </div>
        <div class="container-contain shadow">
            <h2 style="color:#2ABA86"><strong>Masuk</strong></h2>
            <form class="pt-3" method="POST" action="{{url('/login')}}">
              @csrf
                <div class="mb-2">
                  <label for="email" class="form-label" style="color: #2ABA86">Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" required>
                  @error('email')
                  <div class="invalid-feedback">
                    Masukkan email yanng sesuai
                  </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="password" class="form-label" style="color: #2ABA86">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password">
                  @error('password')
                  <div class="invalid-feedback">
                    Masukkan password yang sesuai
                  </div>
                @enderror
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