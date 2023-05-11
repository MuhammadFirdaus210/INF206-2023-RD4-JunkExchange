@extends('layouts.main')
@section('title')
JunkExchange | All Product
@endsection
@section('container')

<div class="container mt-5">

    <!-- karosel -->
    <div class="karosel">
        <div class="col">
            <img src="/images/exmple.jpg" style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
        </div>

        <div class="tilt d-flex px-auto">
            
            <div class="d-flex ms-auto gap-2">
                <h6>Sort by</h6>
                <li class="nav-item dropdown dropdown-center">
                    <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #2ABA86">
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
    </div>
    <!-- end karosel -->

</div>
<link rel="stylesheet" href="css/allProduct.css">
@endsection