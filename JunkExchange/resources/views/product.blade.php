@extends('layouts.main')
@section('title')
JunkExchange | Product
@endsection
@section('container')

@include('partials.hypernav')

<div class="container d-flex gap-3 mt-5 ">

    <div class="card w-75" style="background-color: #2ABA86;">
        <div style="height: 450px;">
            <img src="{{ asset('storage/'.$item->photo) }}" class="card-img-top rounded-bottom h-100 object-fit-cover"
                alt="...">
        </div>
        <div class="card-body p-1 px-3">
            <a class="text-white text-decoration-none fs-1" href="#">{{ $item->name }}</a>
        </div>
    </div>

    <div class="card w-50" style="color: #2ABA86; border-color:#2ABA86">
        <div class="card-header">Rincian</div>
        <div class="card-body">
            <div>
                <div class="d-flex justify-content-between">
                    <span>Kategori</span><span>{{ $item->category }}</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Berat</span><span>{{ $item->weight }}</span>
                </div>
                <div class="mt-4">
                    <h5>Barang untuk ditukarkan</h5>
                </div>
                <!-- Button trigger modal -->
                <div class="d-grid gap-2">
                    <button type="button" class="btn my-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                        style="border-color: #2ABA86; color: #2ABA86">
                        Isi Form Pengajuan
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel"> <strong>Form Pengajuan</strong>
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!-- form -->
                            <form action="/product/detail/{{ $item->id }}/store" method="post" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                <div class="mx-auto p-3">
                                    <label for="barang" class="form-label">Nama Barang</label>
                                    <input type="text" name="name" id="name" class="form-control" >
                                </div>
                                <div class="mx-auto p-3">
                                    <label for="exampleInputkategori" class="form-label">Kategori</label>
                                    <input type="text" name="category" id="category" class="form-control" >
                                </div>
                                <div class="mx-auto p-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                    
                                    <textarea type="text" name="description" id="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="mx-auto p-3">
                                    <label for="formFile" class="form-label">Tambah Gambar</label>
                                   
                                    <input class="" name="photo" type="file" id="photo"
                                    style="padding-left: 10px; padding-top: 100px; color: #2ABA86">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn text-white"
                                        style="background-color: #2ABA86">Ajukan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Tambah Gambar</label>
                        <input class="form-control" type="file" id="formFile" style="color: #2ABA86">
                    </div> -->
                {{-- <div class="d-grid gap-2">
                    <a class="btn text-white" href="/kirimpengajuan" type="submit"
                        style="background-color: #2ABA86">Ajukan</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection