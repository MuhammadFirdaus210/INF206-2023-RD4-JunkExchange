@extends('layouts.main')

@section('container')

@include('partials.hypernav')

<div class="main mt-5">
        <h1>Selamat Form Pengajuan Sudah Terkirim</h1>
        <h3>Silahkan Menunggu Pesan Balasan Untuk Step Selanjutnya</h3>

        <div class="shape">
            <div class="lingkaran1"></div>
            <div class="garis"></div>
            <div class="lingkaran2"></div>
            <div class="lingkaran3"></div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer">
        <p>Kembali ke Halaman Awal? <a href="/home">klik disini </a></p>
    </div>
</div>
<link rel="stylesheet" href="css/kirimpengajuan.css">
@endsection