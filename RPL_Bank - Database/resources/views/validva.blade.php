<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Data Mahasiswa - MyBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #0033a0;
            color: white;
            padding: 15px;
            font-size: 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .section-title {
            font-size: 18px;
            color: #0033a0;
            margin-bottom: 15px;
        }
        .univ-info {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .univ-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .univ-name {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }
        .action-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .data-table th, .data-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .data-table th {
            background-color: #0033a0;
            color: white;
        }
        .data-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        Validasi Data Mahasiswa
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">Detail Data Mahasiswa dari Universitas</div>

        <!-- University Information -->
        <div class="univ-info">
            <div class="univ-details">
                <div class="univ-name">Universitas Indonesia</div>
                <p>Email: admin@ui.ac.id</p>
                <p>Tanggal Pengajuan: 2024-11-03</p>
            </div>
            <button class="action-button" onclick="window.location.href='HomeAdmin'">Validasi Data</button>
        </div>

        <!-- Student Data Table -->
        <table class="data-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Tahun Angkatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmad Prasetya</td>
                    <td>12345678</td>
                    <td>Teknik Informatika</td>
                    <td>2022</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rina Wijaya</td>
                    <td>12345679</td>
                    <td>Ekonomi</td>
                    <td>2021</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Budi Santoso</td>
                    <td>12345680</td>
                    <td>Hukum</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Siti Aminah</td>
                    <td>12345681</td>
                    <td>Kedokteran</td>
                    <td>2019</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Dewi Kurnia</td>
                    <td>12345682</td>
                    <td>Sastra Inggris</td>
                    <td>2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
