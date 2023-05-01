
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
                    {{-- <div class="d-flex justify-content-between">
                        <span>Model</span><span>{{ $item->description }}</span>
                    </div> --}}
                    <div class="mt-4">
                        <h5>Barang untuk ditukarkan</h5>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Tambah Gambar</label>
                        <input class="form-control" type="file" id="formFile" style="color: #2ABA86">
                    </div>
                    <div class="d-grid gap-2">
                        <a class="btn text-white" href="/kirimpengajuan" type="submit" style="background-color: #2ABA86">Ajukan</a>
                    </div>
                </div>
            </div>
        </div>          
    </div>

@endsection