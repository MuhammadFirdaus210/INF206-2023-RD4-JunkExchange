@extends('layouts.secondary')

@section('container')
        <div class="hero">
            <a href="/">
                <img src="images/logo.png" style="width:10%" alt="">
            </a>
        </div>
        <div class="container-contain shadow">
            <h2 style="color:#2ABA86"><strong>Daftar Sekarang</strong></h2>
            <form class="pt-2" id="form_input" method="POST" action="{{url('/register')}}">
              @csrf
                <div class="mb-2">
                  <label for="name" class="form-label" style="color: #2ABA86">Nama Lengkap</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Masukkan nama lengkap">
                  @error('name')
                    <div class="invalid-feedback">
                      Masukkan nama yang sesuai
                    </div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label" style="color: #2ABA86">Email address</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email">
                  @error('email')
                    <div class="invalid-feedback">
                      Masukkan email yanng sesuai
                    </div>
                  @enderror
                </div>
                <div class="mb-2 ">
                  <label for="password" class="form-label" style="color: #2ABA86">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan password">
                  @error('password')
                    <div class="invalid-feedback">
                      Masukkan password yang sesuai
                    </div>
                  @enderror
                </div>
                <div class="d-grid gap-2">
                  <button class="btn text-white" type="submit" style="background-color: #2ABA86">Daftar</button>
                </div>
            </form>
            <p class="text-center pt-2 text-dark-emphasis">Sudah punya akun?<br>
                Masuk <a class="text-decoration-none" style="color:#2ABA86" href="/login">disini</a></p>
        </div>
  <link rel="stylesheet" href="css/register.css">
@endsection