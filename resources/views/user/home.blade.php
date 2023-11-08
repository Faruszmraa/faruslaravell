<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Homepage User</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Information</a>
        </div>
    </nav>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-secondary">Selamat Datang {{ Auth::user()->name }}</h1>
                <h6 class="mt-3">Apa yang kamu cari?</h6>
                <p>
                    <a style="text-decoration: none;" href="{{route('phonk.beritaKSI')}}">Berita KSI</a> |
                    <a style="text-decoration: none;" href="{{route('phonk.profileKelulusanKSI')}}">Profile Kelulusan</a> |
                    <a style="text-decoration: none;" href="{{route('phonk.profileDosen')}}">Profile Dosen </a>

                </p>
            </div>
        </div>
    </div>
    <div class="col"></div>
    <div class="col-1"><a href="{{ route('logout') }}" style="text-decoration: none">
            <p class="text-end text-black fw-semibold">Logout</p>
        </a></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>