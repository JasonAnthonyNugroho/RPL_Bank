<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa dan Nomor VA - MyBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
        }

        /* Header */
        .header {
            background-color: #0033a0;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .header-title {
            font-size: 20px;
            font-weight: bold;
        }

        .header-subtitle {
            font-size: 14px;
            margin-top: 5px;
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            color: #0033a0;
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #0033a0;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .button {
            padding: 10px 20px;
            background-color: #0033a0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            text-align: center;
        }

        .button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-title">MyBCA Admin Dashboard</div>
        <div class="header-subtitle">Daftar Mahasiswa dan Nomor VA</div>
    </div>

    <div class="container">
        <h2>Daftar Mahasiswa</h2>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Nomor VA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ahmad Fauzi</td>
                        <td>123456789</td>
                        <td>987654321001</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rina Wulandari</td>
                        <td>234567891</td>
                        <td>987654321002</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Putri Rahmawati</td>
                        <td>345678912</td>
                        <td>987654321003</td>
                    </tr>
                    <!-- Tambahkan data mahasiswa lainnya di sini -->
                </tbody>
            </table>
        </div>

        <a href="HomeAdmin" class="button">Kembali ke Dashboard</a>
    </div>
</body>
</html>
