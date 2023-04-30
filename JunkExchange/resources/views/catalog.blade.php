{{-- @dd($datas) --}}

@extends('layouts.main')

@section('container')

@include('partials.hypernav')

<div class="container mt-5">
    <div class="col">
        <img src="/images/exmple.jpg" style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
    </div>

    <div class="tilt d-flex px-auto">
        <div>
            <h6>Menampilkan Kategori Hasil Pencarian Untuk <a href="#">"Vas Bunga"</a></h6>
        </div>
        <div class="d-flex ms-auto gap-2">
            <h6>Sort by</h6>
            <li class="nav-item dropdown dropdown-center">
                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: #2ABA86">
                  Dropdown
                </button>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href="#">Banyak Dicari</a></li>
                  <li><a class="dropdown-item" href="#">Unik</a></li>
                  <li><a class="dropdown-item" href="#">Bermanfaat</a></li>
                </ul>
            </li>
        </div>
    </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($datas as $item)

    <div class="col">
        <div class="card shadow" style="background-color: #2ABA86;">
            <img src="{{ asset('storage/'.$item->photo) }}"
                style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
            <div class="card-body p-1 px-3">
                <a class="text-white text-decoration-none" href="/product/{{ $item->id }}">{{ $item->name }}</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
</div>
<link rel="stylesheet" href="css/catalog.css">
@endsection