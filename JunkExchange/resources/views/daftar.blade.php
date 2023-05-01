@extends('layouts.main') @section('container')

<div class="container-contain">
    <div class="sidebar">
        <div style="padding-left: 15px; padding-top: 15px">
            <a href="/dasbor">
                <img src="images/shop.png" alt="" width="25" height="25" />
                <p class="sidebar-text">Dasbor</p>
            </a>
            <a href="/datas">
                <img src="images/additem.png" alt="" width="25" height="25" />
                <p class="sidebar-text">Pengajuan</p>
            </a>
            <a href="/" class="">
                <img src="images/back.png" alt="" width="25" height="25" />
                <p class="sidebar-text">Kembali</p>
            </a>
        </div>
    </div>


    <main class="content col-lg-10 px-md-5">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="" style="color:#2ABA86"> <strong>Daftar Pengajuan</strong> </h2>
        </div>
        <!-- awal upload img -->
    <div class="container">
        <div class="row">
            <div class="">
                <a
                    href="{{ url('/dasbor') }}"
                    class="btn btn-success"
                    title="Add New Contact"
                >
                    Add New Data
                </a>
            </div>
        </div>
        <div style="padding-top: 10px">
            <table class="table table-bordered table-striped" id="membersTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Berat</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->weight }}</td>
                        <td>
                            <img
                                src="{{ asset('storage/'.$item->photo) }}"
                                width="60"
                                height="60"
                                class="img img-responsive"
                            />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- akhir upload img -->
    </main>
</div>
<link rel="stylesheet" href="css/contributor.css">

    

@endsection
