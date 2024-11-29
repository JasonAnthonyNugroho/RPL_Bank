<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBCA Admin Dashboard</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e9eef3;
            color: #333;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: #0033a0;
            color: white;
            padding: 20px;
            font-size: 24px;
            text-align: center;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container {
            display: flex;
            flex: 1;
            overflow: hidden;
        }
        .sidebar {
            background-color: #ffffff;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .sidebar h2 {
            color: #0033a0;
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }
        .sidebar a {
            text-decoration: none;
            color: #0033a0;
            padding: 12px;
            margin: 5px 0;
            border-radius: 5px;
            font-size: 16px;
            display: block;
            background-color: #f1f4f8;
            font-weight: 500;
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar a:hover {
            background-color: #d9e3f0;
            color: #002080;
        }
        .content {
            flex: 1;
            padding: 30px;
            background-color: #f7f9fc;
            overflow-y: auto;
        }
        .content h1 {
            font-size: 28px;
            color: #0033a0;
            margin-bottom: 20px;
            font-weight: bold;
        }
        /* Dashboard Card Styles */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .card p {
            color: #555;
            margin-bottom: 15px;
        }
        /* Button and Footer Styles */
        .card button {
            background-color: #0033a0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }
        .card button:hover {
            background-color: #002080;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #555;
            padding: 15px 0;
            background-color: #f1f4f8;
            border-top: 1px solid #e1e4e8;
            flex-shrink: 0;
        }
        /* Chart Styles */
        .chart {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: #0033a0;
            font-weight: bold;
        }
    </style>
    <!-- Chart.js library for dynamic charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">MyBCA Admin Dashboard</div>

    <div class="container">
        <!-- Sidebar Menu -->
        <div class="sidebar">
            <h2>Menu Utama</h2>
            <a href="ReqNoUniv">Request No Univ</a>
            <a href="ReqGenVa">Generate VA</a>
            <a href="CariUnivVa">List Data VA</a>
            <a href="CariUnivVy">Transaksi per Univ</a>
        </div>

        <!-- Content Area with Updated Dashboard -->
        <div class="content">
            <h1>Selamat Datang, Admin!</h1>
            <div class="dashboard-grid">
                <!-- Total Request No Univ Bulan Ini -->
                <div class="card">
                    <h3>Total Request No Univ Bulan Ini</h3>
                    <p>350 permintaan terdaftar bulan ini.</p>
                </div>

                <!-- Ringkasan Transaksi Terbaru -->
                <div class="card">
                    <h3>Ringkasan Transaksi Terbaru</h3>
                    <div class="chart">
                        <canvas id="transactionChart"></canvas>
                    </div>
                </div>

                <!-- Data Pengguna Aktif -->
                <div class="card">
                    <h3>Data Pengguna Aktif</h3>
                    <p>Pengguna baru bulan ini: 120</p>
                    <p>Total pengguna aktif: 1,300</p>
                </div>

                <!-- Status Pembayaran Pendidikan -->
                <div class="card">
                    <h3>Status Pembayaran Pendidikan</h3>
                    <div class="chart">
                        <canvas id="paymentStatusChart"></canvas>
                    </div>
                </div>

                <!-- Laporan Pengguna Baru Minggu Ini -->
                <div class="card">
                    <h3>Laporan Pengguna Baru Minggu Ini</h3>
                    <p>Pendaftar minggu ini: 45 pengguna baru</p>
                </div>

                <!-- Top 5 Universitas dengan Transaksi Terbanyak -->
                <div class="card">
                    <h3>Top 5 Universitas dengan Transaksi Terbanyak</h3>
                    <div class="chart">
                        <canvas id="topUniversitiesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 BCA. Hak Cipta Dilindungi.
    </div>

    <script>
        // Chart for Ringkasan Transaksi Terbaru
        const ctx1 = document.getElementById('transactionChart').getContext('2d');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Total Transaksi',
                    data: [500, 700, 400, 600, 800, 450, 650],
                    borderColor: '#0033a0',
                    fill: true,
                    backgroundColor: 'rgba(0, 51, 160, 0.1)',
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                animation: { duration: 1000 },
                plugins: { legend: { display: true, position: 'top' } }
            }
        });

        // Chart for Status Pembayaran Pendidikan
        const ctx2 = document.getElementById('paymentStatusChart').getContext('2d');
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Lunas', 'Menunggu Pembayaran'],
                datasets: [{
                    data: [300, 150],
                    backgroundColor: ['#0033a0', '#ccc'],
                }]
            },
            options: {
                responsive: true,
                animation: { duration: 1000 },
                plugins: { legend: { position: 'top' } }
            }
        });

        // Chart for Top 5 Universitas dengan Transaksi Terbanyak
        const ctx3 = document.getElementById('topUniversitiesChart').getContext('2d');
        new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: ['UGM', 'UPN', 'UKDW', 'UPH', 'UAJYs'],
                datasets: [{
                    label: 'Jumlah Transaksi',
                    data: [120, 100, 90, 85, 80],
                    backgroundColor: '#0033a0',
                }]
            },
            options: {
                responsive: true,
                animation: { duration: 1000 },
                plugins: { legend: { display: false } }
            }
        });
    </script>
</body>
</html>
