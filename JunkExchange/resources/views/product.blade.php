
@extends('layouts.main')

@section('container')
    
@include('partials.hypernav')

    <div class="container d-flex gap-3 mt-5">
        
        <div class="card w-75" style="background-color: #2ABA86;">
            <img src="{{ asset('storage/'.$item->photo) }}" class="card-img-top rounded-bottom h-100 object-fit-cover" alt="...">
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
            <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="background-color: #2ABA86" >
            Isi Form Pengajuan
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"> <strong>Modal title</strong></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- form -->
            <form>
                    <div class="mx-auto p-3">
                        <label for="barang" class="form-label">Nama Barang</label>
                        <input type="namabarang" class="form-control" id="exampleInputnamabarang">
                    </div>
                    <div class="mx-auto p-3">
                        <label for="exampleInputkategori" class="form-label">Kategori</label>
                        <input type="kategori" class="form-control" id="exampleInputkategori">
                    </div>
                    <div class="mx-auto p-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mx-auto p-3">
                        <label for="formFile" class="form-label">Tambah Gambar</label>
                        <input class="form-control" type="file" id="formFile" style="color: #2ABA86">
                    </div>
                    
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" style="background-color: #2ABA86">Kirim</button>
            </div>
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
                    <div class="d-grid gap-2">
                        <a class="btn text-white" href="/kirimpengajuan" type="submit" style="background-color: #2ABA86">Ajukan</a>
                    </div>
                </div>
            </div>
        </div>          
    </div>

@endsection