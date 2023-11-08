<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container"> 
            <a class="navbar-brand">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a> 
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang!</h1>
                <h4 class="text-secondary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
                <h6 class="mt-3"> Silahkan <a href=" {{route('auth.login')}} " style="text-decoration: none">MASUK</a> atau <a href="{{route('auth.register')}}" style="text-decoration: none">DAFTAR</a> jika anda belum punya akun </h6>
                <p> 
                    <a style="text-decoration: none;" href="{{route('phonk.beritaKSI')}}">Berita KSI</a> |
                    <a style="text-decoration: none;" href="{{route('phonk.profileKelulusanKSI')}}">Profile Kelulusan</a> |
                    <a style="text-decoration: none;" href="{{route('phonk.profileDosen')}}">Profile Dosen </a> 
                </p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>