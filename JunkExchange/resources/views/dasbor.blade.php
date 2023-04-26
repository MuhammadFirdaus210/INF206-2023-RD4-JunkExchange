@extends('layouts.main') @section('container')

<body>
    <div class="bar1">
        <a>
            <p class="text">Keranjang</p>
        </a>
        <a>
            <p class="text">Kotak</p>
        </a>
        <a>
            <p class="text">Vas Bunga</p>
        </a>
        <a>
            <p class="text">Boneka</p>
        </a>
        <a>
            <p class="text">Bunga</p>
        </a>
        <a>
            <p class="text">Mainan</p>
        </a>
    </div>
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
            <a href="/" style="padding-top: 460px">
                <img src="images/back.png" alt="" width="25" height="25" />
                <p class="sidebar-text">Kembali</p>
            </a>
        </div>
    </div>
    <div>
        <p class="dasbor-tittle">Dasbor</p>
    </div>

    <!-- awal upload img -->
    <div class="cards">
        <div class="card-header">Add New Member</div>
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

                            <label>Nama Barang</label></br>
                            <input type="text" name="name" id="name" class="form-control"></br>
                            <label>Deskripsi</label></br>
                            <input type="text" name="description" id="description" class="form-control"></br>
                            <label>Berat</label></br>
                            <input type="text" name="weight" id="weight" class="form-control"></br>
                        </div>
                    </div>
                    <div style="padding-top: 20px;">
                        <input type="submit" value="Save" class="btn btn-success"
                            style="width: 295px; height: 50px;"></br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- akhir upload img -->
</body>

@stop