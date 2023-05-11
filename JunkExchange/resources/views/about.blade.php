@extends('layouts.main')
@section('title')
JunkExchange | About
@endsection
@section('container')


<div class="container-contain pt-5">


    <div class="title gap-3">
        <div class="hero">
            <img src="images/thumbnail.png" alt="">
        </div>

        <div class="paragraph1">
            <h2>Junk Exchange</h2>
            <p><em>Tukar sampahmu dengan manfaat yang lebih besar</em></p>
            <p>Junk Exchange adalah sebuah aplikasi pertukaran sampah yang bertujuan untuk memudahkan masyarakat
                dalam mengelola sampah mereka dengan lebih efektif. Kami percaya bahwa sampah bukanlah masalah,
                melainkan sebuah sumber daya yang dapat dimanfaatkan dan didaur ulang menjadi produk yang lebih berguna.</p>
        </div>

    </div>


    <div class="icon">
        <div>
            <a class="tombol" href="http://Instagram.com/mhd.fir_"><img src="images/daus.jpg"></a>
            <p>M. Firdaus</p>
        </div>
        <div>
            <a class="tombol" href="https://instagram.com/eki_zamani?igshid=ZDdkNTZiNTM="><img
                    src="images/zaki.jpg"></a>
            <p>M. Zaki Zamani</p>
        </div>
        <div>
            <a class="tombol" href="https://instagram.com/alfnsnf?igshid=ZDdkNTZiNTM="><img src="images/alfan.jpg"></a>
            <p>M.Alfan Septian</p>
        </div>
        <div>
            <a class="tombol" href="https://instagram.com/rahmatul_idami?igshid=ZDdkNTZiNTM="><img
                    src="images/rahma.jpg"></a>
            <p>Rahmatul Idami</p>
        </div>
        <div>
            <a class="tombol" href="http://Instagram.com/afifahnbrs_"><img src="images/afifah.jpg"></a>
            <p>Afifah Nibras</p>
        </div>

    </div>

    <!-- <div class="footer">
        <p>©2023JunkExchange</p>
    </div> -->
    @include('partials.footer')
</div>


<link rel="stylesheet" href="css/about.css">
@endsection