<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi Mahasiswa - myBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            position: relative;
        }

        /* Header */
        .header {
            background-color: #0033a0;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header-title {
            font-size: 24px;
            font-weight: bold;
        }

        .header-subtitle {
            font-size: 14px;
            margin-top: 5px;
        }

        /* Container */
        .container {
            padding: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        /* University Information */
        .univ-info {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .univ-info h2 {
            color: #0033a0;
            font-size: 18px;
            margin: 0 0 5px 0;
        }

        .univ-info p {
            color: #666;
            font-size: 14px;
            margin: 0;
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Transactions Table */
        .transactions-table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 8px;
        }

        .transactions-table th, .transactions-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .transactions-table th {
            background-color: #0033a0;
            color: white;
        }

        .transactions-table tr:hover {
            background-color: #f1f1f1;
        }

        /* Action Buttons */
        .buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
        }

        .button {
            background-color: #0033a0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 14px;
        }

    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-title">MyBCA Admin Dashboard</div>
        <div class="header-subtitle">Detail Transaksi Mahasiswa</div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- University Information -->
        <div class="univ-info">
            <h2>Universitas Gadjah Mada</h2>
            <p>ID Universitas: 1001</p>
            <p>Email Kontak: finance@ugm.ac.id</p>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Cari berdasarkan Nama Mahasiswa atau Nomor Pembayaran...">
        </div>

        <!-- Transactions Table -->
        <table class="transactions-table">
            <thead>
                <tr>
                    <th>No. Pembayaran</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Transaksi</th>
                    <th>Jumlah (IDR)</th>
                    <th>Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TRX-00123</td>
                    <td>Ani Setiawan</td>
                    <td>2024-11-05</td>
                    <td>1,500,000</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>TRX-00124</td>
                    <td>Budi Santoso</td>
                    <td>2024-11-04</td>
                    <td>2,000,000</td>
                    <td>Menunggu Pembayaran</td>
                </tr>
                <tr>
                    <td>TRX-00125</td>
                    <td>Citra Lestari</td>
                    <td>2024-11-03</td>
                    <td>1,200,000</td>
                    <td>Lunas</td>
                </tr>
                <tr>
                    <td>TRX-00126</td>
                    <td>Doni Pratama</td>
                    <td>2024-11-02</td>
                    <td>1,000,000</td>
                    <td>Menunggu Pembayaran</td>
                </tr>
                <tr>
                    <td>TRX-00127</td>
                    <td>Eka Wibowo</td>
                    <td>2024-11-01</td>
                    <td>1,800,000</td>
                    <td>Lunas</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Action Buttons -->
    <div class="buttons">
        <button class="button">Kirim Laporan Bulanan</button>
        <button class="button" onclick="window.location.href='HomeAdmin'">Kembali ke Halaman Utama</button>
    </div>
</body>
</html>
