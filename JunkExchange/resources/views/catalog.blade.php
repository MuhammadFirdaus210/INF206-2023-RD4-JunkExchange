@extends('layouts.main')

@section('container')

@include('partials.hypernav')
<div class="container mt-5">
    <div class="col">
        <img src="/images/exmple.jpg" style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
    </div>

</div>

<div>
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
    @foreach($datas as $item)
    {{-- <tr>
                        <td>{{ $loop->iteration }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->description }}</td>
    <td>{{ $item->weight }}</td>
    <td>
        <img src="{{ asset('storage/'.$item->photo) }}" width="60" height="60" class="img img-responsive" />
    </td>
    </tr> --}}
    <div class="col">
        <div class="card shadow" style="background-color: #2ABA86;">
            <img src="{{ asset('storage/'.$item->photo) }}"
                style="width: 100%; height: 150px; border-radius: 5px; object-fit: cover;">
            <div class="card-body p-1 px-3">
                <a class="text-white text-decoration-none" href="/product">{{ $item->name }}</a>
            </div>
        </div>
    </div>
    @endforeach

</div>
</div>
<link rel="stylesheet" href="css/catalog.css">
@endsection