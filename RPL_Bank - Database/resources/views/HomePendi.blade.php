<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBCA Dashboard - Instansi Pendidikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        /* Header Style */
        .header {
            background-color: #0033a0;
            color: white;
            padding: 15px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .menu {
            display: flex;
            gap: 15px;
        }
        .header .menu a {
            color: white;
            text-decoration: none;
        }
        .header .menu a:hover {
            text-decoration: underline;
        }
        /* Main Content */
        .container {
            padding: 20px;
        }
        .welcome-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .welcome-box h2 {
            font-size: 18px;
            color: #333;
            margin: 0;
        }
        .welcome-box p {
            color: #777;
        }
        .features {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }
        .features .feature-item {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            flex: 1;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            color: #0033a0;
            cursor: pointer;
            text-decoration: none;
        }
        .features .feature-item:hover {
            background-color: #f0f4f8;
        }
        .dashboard-section {
            margin-top: 30px;
        }
        .dashboard-title {
            font-size: 18px;
            color: #0033a0;
            margin-bottom: 10px;
        }
        .dashboard-cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .dashboard-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            flex: 1 1 30%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-size: 16px;
            color: #333;
        }
        .dashboard-card h3 {
            color: #0033a0;
            font-size: 24px;
            margin: 0;
        }
        .dashboard-chart {
            margin-top: 20px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div><strong>myBCA</strong></div>
        <div class="menu">
            <a href="#">Beranda</a>
            <a href="#">Informasi</a>
            <a href="#">Bantuan</a>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Welcome Box -->
        <div class="welcome-box">
            <h2>Halo, INSTANSI PENDIDIKAN</h2>
            <p>BCA ID: ED***C | Login terakhir Anda 31 Okt 2024 11:16:37 WIB</p>
            <div class="features">
                <a href="{{ url('IsiUniv') }}" class="feature-item">Input Universitas</a>
                <a href="{{ url('TambahMhs') }}" class="feature-item">Input Data Mahasiswa</a>
                <a href="{{ url('DftMhs') }}" class="feature-item">Daftar Mahasiswa</a>
                <a href="{{ url('SettingHarga') }}" class="feature-item">Setting Harga</a>
                <a class="feature-item">Laporan Keuangan</a>
                <a href="{{ url('RiwayatPendi') }}" class="feature-item">Riwayat Transaksi</a>
            </div>
        </div>

        <!-- Dashboard Section -->
        <div class="dashboard-section">
            <div class="dashboard-title">Statistik Pendidikan</div>
            <div class="dashboard-cards">
                <!-- Card for Total Mahasiswa Terdaftar -->
                <div class="dashboard-card">
                    <h3>1,250</h3>
                    <p>Mahasiswa Terdaftar</p>
                </div>
                <!-- Card for Pembayaran Tertunda -->
                <div class="dashboard-card">
                    <h3>150</h3>
                    <p>Pembayaran Tertunda</p>
                </div>
                <!-- Card for Mahasiswa Aktif -->
                <div class="dashboard-card">
                    <h3>1,000</h3>
                    <p>Mahasiswa Aktif</p>
                </div>
            </div>
            <!-- Chart Placeholder for Payment Statistics -->
            <div class="dashboard-chart">
                <h3>Grafik Pembayaran Mahasiswa</h3>
                <p>Grafik ini menampilkan statistik pembayaran bulanan.</p>
                <img src="https://via.placeholder.com/600x300?text=Grafik+Pembayaran" alt="Grafik Pembayaran">
            </div>
        </div>
    </div>
</body>
</html>
