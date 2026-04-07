<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard MoraMarket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fdf6f0; /* cream soft */
            color: #4b3b6c; /* ungu tua */
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #caa6fa, #ffb6b9); /* lavender ke peach */
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #ffe1f2 !important;
        }

        /* Sidebar */
        .sidebar {
            background-color: #fff;
            min-height: 100vh;
            border-right: 1px solid #ddd;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: #4b3b6c;
            margin-bottom: 5px;
            border-radius: 8px;
            font-weight: 500;
        }
        .sidebar a:hover {
            background-color: #f7d9f7;
            color: #a85aa6;
            text-decoration: none;
        }

        /* Cards */
        .card {
            border-radius: 15px;
            box-shadow: 0 6px 18px rgba(168,90,166,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(168,90,166,0.2);
        }
        .card-title {
            font-weight: 600;
        }

        /* Buttons */
        .btn-primary {
            background-color: #caa6fa;
            border: none;
            color: #fff;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #b588f5;
        }
        .btn-success {
            background-color: #ffb6b9;
            border: none;
            color: #4b3b6c;
            font-weight: bold;
        }
        .btn-success:hover {
            background-color: #ff9fa6;
        }

        /* Header Text */
        .intro-text {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #a85aa6;
            text-align: center;
        }

        /* Footer */
        footer {
            background: #caa6fa;
            color: #fff;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MoraMarket</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar d-none d-md-block">
            <a href="#"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
            <a href="/produk"><i class="bi bi-box-seam me-2"></i> Produk</a>
            <a href="/produk/tambah"><i class="bi bi-plus-square me-2"></i> Tambah Produk</a>
            <a href="/statistik"><i class="bi bi-graph-up me-2"></i> Statistik</a>
        </div>

        <!-- Konten Utama -->
        <div class="col-md-10 pt-4">

            <!-- Text diperbesar -->
            <p class="intro-text">Sistem Toko Grosir Sembako & Peralatan Rumah Tangga</p>

            <!-- Cards Grid -->
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <i class="bi bi-box-seam display-4 mb-3 text-warning"></i>
                        <h5 class="card-title">Data Produk</h5>
                        <p class="card-text">Lihat daftar semua produk yang tersedia di toko.</p>
                        <a href="/produk" class="btn btn-primary">Lihat Produk</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <i class="bi bi-plus-square display-4 mb-3 text-warning"></i>
                        <h5 class="card-title">Tambah Produk</h5>
                        <p class="card-text">Tambahkan produk baru ke dalam sistem toko.</p>
                        <a href="/produk/tambah" class="btn btn-success">Tambah Produk</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card p-3 text-center h-100">
                        <i class="bi bi-graph-up display-4 mb-3 text-warning"></i>
                        <h5 class="card-title">Statistik</h5>
                        <p class="card-text">Pantau performa penjualan dan stok produk.</p>
                        <a href="/statistik" class="btn btn-primary">Lihat Statistik</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="text-center py-3 mt-5">
    &copy; 2026 MoraMarket. All Rights Reserved.
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\moramarket2026\resources\views/dashboard.blade.php ENDPATH**/ ?>