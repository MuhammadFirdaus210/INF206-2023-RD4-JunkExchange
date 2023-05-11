@extends('layouts.main')
@section('title')
JunkExchange | Dashboard
@endsection
@section('container')

@include('partials.hyperNav')

<div class="container-contain">
    <div class="sidebar" style="height: 100vh">
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

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="" style="color:#2ABA86"> <strong>Dashboard</strong> </h2>
        </div>

        <div class="cards d-flex">
            <form action="{{ url('/datas') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                {!! csrf_field() !!}
                <div class="img-upload">
                    <div class="img-text">
                        <img src="images/upload.png" alt="" width="150" height="100" style="padding-left: 50px;" />
                        <input class="" name="photo" type="file" id="photo"
                            style="padding-left: 10px; padding-top: 100px;"> <br>
                    </div>
                </div>

                <div style="padding-left: 20px;">
                    <div class="img-upload" style="height: 80%; ">
                        <div style="padding-left: 20px; padding-top: 25px; padding-bottom: 40px;">

                            <label>Nama Barang</label> <br>
                            <input type="text" name="name" id="name" class="form-control"><br>
                            <label>Kategori</label><br>
                            <input type="text" name="category" id="category" class="form-control"><br>
                            <label>Berat</label><br>
                            <input type="text" name="weight" id="weight" class="form-control"><br>
                            <label>Nomor Hp (+62) + (number)</label><br>
                            <input type="number" name="number" id="number" class="form-control"><br>
                        </div>
                    </div>
                    <div style="padding-top: 20px;">
                        <input type="submit" value="Save" class="btn text-white"
                            style="width: 295px; height: 50px; background-color: #2ABA86;"><br>
                    </div>
                </div>
            </form>

                <div class="card ms-5 shadow w-25">
                    <h2 class="px-4" style="color:#2ABA86"> <p style="font-size: 30px; padding-top: 15px;">Notification</p> </h2>
                    <div class="col" style="padding-left: 20px; ">
                        @foreach ($user->notifications as $notification)
                        @if ($notification->data['itemName'])
                        <div class="card mb-3">
                            <div class="card-body">
                              <p class="card-text mx-1">Ada Pertukaran diajukan pada {{ $notification->data['itemName'] }} nih.</p>
                              <div class="d-flex gap-2">
                                  <form action="/dasbor/approve{{ $notification->data['userId'] }}">
                                      <button type ="submit" class="btn btn-success ps-2"><i class="bi bi-check-lg pe-2"></i>Terima</button>
                                  </form>
                                  <form action="/dasbor/reject{{ $notification->data['userId'] }}">
                                      <button type ="submit" class="btn btn-danger ps-2"><i class="bi bi-x-lg pe-2"></i>Tolak</button>
                                  </form>
                                  <a href="/detailbarang">
                                    <button class="btn btn-primary ps-2"><i class="bi bi-book pe-2"></i>Detail</button>
                                </a>
                              </div>
                            </div>
                        </div>
                        @elseif($notification === null)
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text mx-1">Belum ada notifikasi nih</p>
                            </div>
                        </div>
                        @else
                        <div class="card mb-3">
                            <div class="card-body">
                                <p class="card-text mx-1">Belum ada notifikasi nih</p>
                            </div>
                        </div> 
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end notification -->
        </div>
    </main>
</div>
<link rel="stylesheet" href="css/contributor.css">
@endsection