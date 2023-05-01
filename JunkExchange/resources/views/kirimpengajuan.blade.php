@extends('layouts.main')

@section('container')

@include('partials.hypernav')

<div class="main mt-5">
    <div class="header">
        <h1>Selamat Form Pengajuan Sudah Terkirim</h1>
        <h5>Silahkan Menunggu Pesan Balasan Untuk Step Selanjutnya</h5>
    </div>

    <div class="shape d-flex justify-content-center">
        <div class="lingkaran"></div>
        <div class="garis"></div>
        <div class="lingkaran"></div>
        <div class="garis"></div>
        <div class="lingkaran"></div>
    </div>

    <div class="footer">
        <h6>Kembali ke Halaman Awal? <a href="/home">klik disini </a></h6>
    </div>

</div>
<link rel="stylesheet" href="css/kirimpengajuan.css">
@endsection