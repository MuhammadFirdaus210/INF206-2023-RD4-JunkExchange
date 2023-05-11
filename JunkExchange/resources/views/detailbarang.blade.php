@extends('layouts.main')

@section('title')
JunkExchange | Detail Barang
@endsection

@section('container')

<div class="container-contain">
    <main class="content col-lg-10 px-md-5">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="" style="color:#2ABA86"> <strong>Detail Barang</strong> </h2>
        </div>

        <div class="container">        
            <div style="padding-top: 10px">
                <table class="table table-bordered rounded table-striped" id="membersTable">
                    <thead>
                        <tr>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Berat</th>
                        <th>Deskripsi</th>
                        <th>Nomor Hp</th>
                        <th>Gambar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($product as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->weight }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->number }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$item->photo) }}" width="500" height="300"
                                    class="img img-responsive object-fit-cover" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-grid gap-2">
                    <a class="btn text-white" href="/dasbor" type="submit"
                        style="background-color: #2ABA86">Kembali</a>
                </div>
            </div>
        </div>
    </main>
</div>

<link rel="stylesheet" href="css/contributor.css">

@endsection