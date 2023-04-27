@extends('layouts.main')

@section('container')

@include('partials.hypernav')
        <div class="hero">
            <img src="images/exmple.jpg" class="rounded mx-auto d-block" style="width: 70%; height: 150px; border-radius: 5px; object-fit: cover;">
        </div>

        <h6>Menampilkan Kategori Hasil Pencarian Untuk <a href="#">"Vas Bunga"</a></h6>
        <h6>Urut Berdasarkan <div class="dropdown">
         <span>Popularitas &#129063;</span>
        <div class="dropdown-content">
            <p><a href="#">Banyak Dicari</a></p>
            <p><a href="#">Unik</a></p>
            <p><a href="#">Bermanfaat</a></p>
        </div>
        </h6>

        <div class="row">
            <div class="col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 1</a>
                    </div>
                </div>
            </div>
            <div class=".col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a  class="text-white text-decoration-none" href="#">Vas Bunga 2</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 3</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-sm-4">
                <div class="card" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 4</a>
                    </div>
                </div>
            </div>
            <div class=".col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a  class="text-white text-decoration-none" href="#">Vas Bunga 5</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 6</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-sm-4">
                <div class="card" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 7</a>
                    </div>
                </div>
            </div>
            <div class=".col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a  class="text-white text-decoration-none" href="#">Vas Bunga 8</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="card shadow" style="background-color: #2ABA86; width: 18rem;">
                    <img src="images/vas.jpg" style="object-fit: cover;">
                    <div class="card-img-top">
                        <a class="text-white text-decoration-none" href="#">Vas Bunga 9</a>
                    </div>
                </div>
            </div>
        </div>

@endsection