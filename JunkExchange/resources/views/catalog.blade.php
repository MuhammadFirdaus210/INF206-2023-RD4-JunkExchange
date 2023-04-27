@extends('layouts.main')

@section('container')

@include('partials.hypernav')
<div class="container">
    <div class="col">
        <img src="/images/exmple.jpg" style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
    </div>

</div>

<div >
    <h6>Menampilkan Kategori Hasil Pencarian Untuk <a href="#">"Vas Bunga"</a></h6>
    <h6>Urut Berdasarkan <div class="dropdown">
     <span>Popularitas &#129063;</span>
    <div class="dropdown-content">
        <p><a href="#">Banyak Dicari</a></p>
        <p><a href="#">Unik</a></p>
        <p><a href="#">Bermanfaat</a></p>
    </div>
    </h6>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card shadow" style="background-color: #2ABA86;">
            <img src="/images/exmple.jpg" style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
            <div class="card-body p-1 px-3">
                <a  class="text-white text-decoration-none" href="/product">Product</a>
            </div>
        </div>
    </div>

  </div>
</div>
<link rel="stylesheet" href="css/search.css">
@endsection