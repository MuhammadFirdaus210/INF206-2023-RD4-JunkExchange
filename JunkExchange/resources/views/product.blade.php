@extends('layouts.main')

@section('container')
    
    @include('partials.hypernav')

    <div class="container d-flex gap-3 mt-5">
        
        <div class="card w-75" style="background-color: #2ABA86;">
            <img src="images/exmple.jpg" class="card-img-top rounded-bottom h-100 object-fit-cover" alt="...">
            <div class="card-body">
                <a class="text-white text-decoration-none fs-1" href="#">Something</a>
            </div>
        </div>

        <div class="card text-black w-50">
            <div class="card-header">Rincian</div>
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between">
                        <span>Merk</span><span>example</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Tahun</span><span>example</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Model</span><span>example</span>
                    </div>
                    <div class="mt-4">
                        <h5>Barang untuk ditukarkan</h5>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn text-white" type="submit" style="background-color: #2ABA86">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>          
        
    </div>

@endsection