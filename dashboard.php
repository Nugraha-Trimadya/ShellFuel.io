<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
        }
        .navbar {
            background-color: #d63031 !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }
        .nav-link {
            color: white !important;
            margin: 0 10px;
        }
        .nav-link:hover {
            color: #ffd700 !important;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-header {
            background-color: #d63031;
            color: white;
            border-radius: 15px 15px 0 0 !important;
            font-weight: bold;
        }
        .stats-card {
            padding: 20px;
            text-align: center;
        }
        .stats-icon {
            font-size: 40px;
            color: #d63031;
            margin-bottom: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-fuel-pump me-2"></i>SPBU Online System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="landing.php"><i class="bi bi-house-door me-1"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-cart me-1"></i>Beli BBM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-clock-history me-1"></i>Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person me-1"></i>Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Total Transaksi
                    </div>
                    <div class="stats-card">
                        <i class="bi bi-cart-check stats-icon"></i>
                        <h3>150</h3>
                        <p class="text-muted">Transaksi Bulan Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Total Pendapatan
                    </div>
                    <div class="stats-card">
                        <i class="bi bi-wallet2 stats-icon"></i>
                        <h3>Rp 15.000.000</h3>
                        <p class="text-muted">Pendapatan Bulan Ini</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Stok BBM
                    </div>
                    <div class="stats-card">
                        <i class="bi bi-fuel-pump stats-icon"></i>
                        <h3>5000 L</h3>
                        <p class="text-muted">Total Stok Tersedia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Pelanggan
                    </div>
                    <div class="stats-card">
                        <i class="bi bi-people stats-icon"></i>
                        <h3>250</h3>
                        <p class="text-muted">Total Pelanggan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Transaksi Terbaru
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Jenis BBM</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td>2023-07-20</td>
                                    <td>Pertamax</td>
                                    <td>10 L</td>
                                    <td>Rp 150.000</td>
                                </tr>
                                <tr>
                                    <td>#002</td>
                                    <td>2023-07-20</td>
                                    <td>Pertalite</td>
                                    <td>15 L</td>
                                    <td>Rp 195.000</td>
                                </tr>
                                <tr>
                                    <td>#003</td>
                                    <td>2023-07-19</td>
                                    <td>Solar</td>
                                    <td>20 L</td>
                                    <td>Rp 240.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Harga BBM Terkini
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pertamax
                                <span class="badge bg-primary rounded-pill">Rp 15.000/L</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Pertalite
                                <span class="badge bg-primary rounded-pill">Rp 13.000/L</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Solar
                                <span class="badge bg-primary rounded-pill">Rp 12.000/L</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>