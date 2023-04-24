
@extends('layouts.main')

@section('container')
    <div class="container-contain">
        <div class="hero">
            <img src="images/logo.png" alt="">
        </div>
        <div class="tagline">
            <h6>Pertukaran Populer : </h6>
                <a href="#">Vas Bunga</a>
                <a href="#">Boneka</a>
                <a href="#">Kotak</a>
                <a href="#">Botol</a>
    
        </div>

        <div class="search-section">
            <form action="" class="search-bar">
                <input type="text" id="search-column" placeholder="Temukan disini" />
                <button>Cari</button>
            </form>
        </div>

        <div class="titl">
            <h6>Ketegori teratas : </h6>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow" style="background-color: #2ABA86;">
                    <img src="/images/test.jpg" style="width: 100%; height: 120px; border-radius: 5px; object-fit: cover;">
                    <div class="card-body p-1 px-3">
                        <a class="text-white text-decoration-none" href="#">Something</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow" style="background-color: #2ABA86;">
                    <img src="/images/test.jpg" style="width: 100%; height: 120px; border-radius: 5px; object-fit: cover;">
                    <div class="card-body p-1 px-3">
                        <a  class="text-white text-decoration-none" href="#">Something</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<link rel="stylesheet" href="css/home.css">
@endsection

