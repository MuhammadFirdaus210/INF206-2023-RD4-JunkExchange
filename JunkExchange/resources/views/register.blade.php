<!DOCTYPE html>
<html lang="en">
<head>
    <title>Junk Exchange</title>
    <link rel="stylesheet" href="css/Stylist.css">
</head>
<body>
    <a href="/">
        <div class="cancel">
            <h5>Batal</h5>
        </div>
    </a>
     <div class="content">
        <div class="form">
            <h2>Daftar Sekarang</h2>
            <p class="link">Sudah punya akun?<a href="/login">Masuk </a></p>
            <form id="form_input" method="post" action="{{url('/register')}}">
            @csrf              
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nama</label>
                    <input type="name" name="nama" class="form-control" id="inputEmail4" placeholder= "Masukan Email">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder= "Masukan Email">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Sandi</label>
                    <input type="password" name="sandi" class="form-control" id="inputPassword4" placeholder= "Masukan kata sandi">
                </div>
                <a href="/login">
                    <button class="btnn">Daftar</button>
                </a>
            </form>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>