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
    <!-- awal upload img -->
    <p class="dasbor-tittle" style="padding-top: 1px">Daftar Pengajuan</p>
    <div class="container">
        <br /><br />
        <div class="row">
            <div class="col-lg-10"></div>
            <div class="col-lg-2" style="padding-left: 75px">
                <a
                    href="{{ url('/dasbor') }}"
                    class="btn btn-success"
                    title="Add New Contact"
                >
                    Add New Data
                </a>
            </div>
        </div>
        <div style="padding-left: 250px; padding-top: 10px">
            <table class="table table-bordered table-striped" id="membersTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>Berat</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
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
</body>

@endsection
