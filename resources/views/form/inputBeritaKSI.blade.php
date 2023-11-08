<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Input Berita KSI</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <h3 class="container mt-3">Input Berita KSI</h3>
    <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

    <div class="container mt-3">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Judul">
        <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button type="button" class="btn btn-primary mt-2">Input</button>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>