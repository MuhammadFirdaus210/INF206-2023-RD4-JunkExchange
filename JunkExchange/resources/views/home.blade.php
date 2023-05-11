@extends('layouts.main')
@section('title')
JunkExchange | Home
@endsection
@section('container')
<div class="container-contain">
    <div class="hero">
        <img src="images/thumbnail.png" alt="">
    </div>
    <div class="tagline">
        <h6>Pertukaran Populer : </h6>
        <a href="{{ url('/catalog?search=vas bunga') }}" class="text-decoration-none">Vas Bunga</a>
        <a href="{{ url('/catalog?search=boneka') }}" class="text-decoration-none">Boneka</a>
        <a href="{{ url('/catalog?search=kotak') }}" class="text-decoration-none">Kotak</a>
        <a href="{{ url('/catalog?search=botol') }}" class="text-decoration-none">Botol</a>

    </div>

    {{-- <div class="search-section">
            <form action="" class="search-bar">
                <input type="text" id="search-column" placeholder="Temukan disini" />
                <button>Cari</button>
            </form>
        </div> --}}

    <div class="row justify-content-center">
        <form action="{{url('/catalog')}}">
            <div class="input-group mb-3">
                <input type="text" class="form-control shadow" placeholder="Temukan disini" name="search">
                <button class="btn text-white shadow" type="submit" style="background-color: #2ABA86">Cari</button>
            </div>
        </form>
    </div>

    <div class="titl">
        <h6>Ketegori teratas : </h6>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="card shadow" style="background-color: #2ABA86;">
                <img src="/images/vasbunga.jpg"
                    style="width: 100%; height: 120px; border-radius: 5px; object-fit: cover;">
                <div class="card-body p-1 px-3">
                    <a href="{{ url('/catalog?search=vas bunga') }}" class="text-white text-decoration-none">Vas
                        Bunga</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card shadow" style="background-color: #2ABA86;">
                <img src="/images/boneka.jpg"
                    style="width: 100%; height: 120px; border-radius: 5px; object-fit: cover;">
                <div class="card-body p-1 px-3">
                    <a href="{{ url('/catalog?search=boneka') }}" class="text-white text-decoration-none">Boneka</a>
                </div>
            </div>
        </div>

    </div>
</div>

<link rel="stylesheet" href="css/home.css">
<!-- @include('partials.footer') -->
@endsection