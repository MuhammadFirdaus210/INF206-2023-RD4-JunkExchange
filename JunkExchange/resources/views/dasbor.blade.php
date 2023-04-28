@extends('layouts.main') 

@section('container')

    @include('partials.hyperNav')
    
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
                <h2 class="" style="color:#2ABA86"> <strong>Dashboard</strong> </h2>
            </div>

            <div class="cards">
                <div class="card-body">
                    <form action="{{ url('/datas') }}" method="post" enctype="multipart/form-data" style="display: flex;">
                        {!! csrf_field() !!}
                        <div class="img-upload">
                            <div class="img-text">
                                <img src="images/upload.png" alt="" width="150" height="100" style="padding-left: 50px;" />
                                <input class="" name="photo" type="file" id="photo"
                                    style="padding-left: 10px; padding-top: 100px;"> </br>
                            </div>
                        </div>
                        
                        <div style="padding-left: 40px;">
                            <div class="img-upload" style="height: 80%; ">
                                <div style="padding-left: 20px; padding-top: 20px;">

                                    <label>Nama Barang</label> <br>
                                    <input type="text" name="name" id="name" class="form-control"><br>
                                    <label>Deskripsi</label><br>
                                    <input type="text" name="description" id="description" class="form-control"><br>
                                    <label>Berat</label><br>
                                    <input type="text" name="weight" id="weight" class="form-control"><br>
                                </div>
                            </div>
                            <div style="padding-top: 20px;">
                                <input type="submit" value="Save" class="btn text-white"
                                    style="width: 295px; height: 50px; background-color: #2ABA86;"><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <link rel="stylesheet" href="css/contributor.css">
@endsection