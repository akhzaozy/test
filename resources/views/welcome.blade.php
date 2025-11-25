<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Kucingarong TERBANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya tambahan untuk tema gelap */
        .dark-card {
            background-color: #212529; /* Warna gelap */
            color: #f8f9fa; /* Teks putih */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); /* Bayangan gelap */
        }
    </style>
</head>
<body class="bg-dark d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="dark-card text-center">
        <h1 class="display-3 text-warning mb-3">🐱 Kucingarong App Status ⚙️</h1>
        
        <p class="lead mb-4">
            Aplikasi Anda **Telah Berhasil Dijalankan!**
            <br>Siap diakses melalui port 8080
        </p>

        <div class="mt-4">
            <a href="{{ url('/') }}" class="btn btn-warning btn-lg me-3">Jelajahi Beranda</a>
            <a href="https://github.com/armbian" target="_blank" class="btn btn-outline-light btn-lg">Lihat Dokumentasi</a>
        </div>
        
        <p class="mt-5 text-muted small">Powered by Armbian & Bootstrap 5</p>
    </div>
</body>
</html>
