<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Transaksi - myBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
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
            max-width: 800px;
            margin: 0 auto;
        }

        /* Search Box */
        .search-box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .search-box h2 {
            font-size: 18px;
            color: #0033a0;
            margin-bottom: 10px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .form-group label {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .form-group input {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .buttons {
            display: flex;
            gap: 10px;
        }

        .buttons button {
            padding: 10px 15px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons .btn-submit {
            background-color: #0033a0;
            color: white;
        }

        .buttons .btn-back {
            background-color: #ccc;
            color: #333;
        }

        /* Registered Universities */
        .registered-universities {
            margin-top: 30px;
        }

        .registered-universities h3 {
            font-size: 18px;
            color: #0033a0;
            margin-bottom: 10px;
        }

        .univ-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .univ-list li {
            background-color: #ffffff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-title">MyBCA Admin Dashboard</div>
        <div class="header-subtitle">Pencarian Daftar VA</div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Search Box -->
        <div class="search-box">
            <h2>Cari Daftar VA Universitas</h2>
            <div class="form-group">
                <label for="univ-id">Masukkan Nomor Universitas:</label>
                <input type="text" id="univ-id" placeholder="Contoh: 123456">
            </div>
            <div class="buttons">
                <button class="btn-submit">Cari</button>
                <button class="btn-back" onclick="window.history.back();">Kembali</button>
            </div>
        </div>

        <!-- Registered Universities Section -->
        <div class="registered-universities">
            <h3>Daftar Universitas Terdaftar</h3>
            <ul class="univ-list">
                <li>
                    <a href="/ListVaMhs">
                    <span>Universitas Gadjah Mada</span>
                    <span>ID: 1001</span>
                    </a>
                </li>
                <li>
                    <span>Institut Teknologi Bandung</span>
                    <span>ID: 1002</span>
                </li>
                <li>
                    <span>Universitas Indonesia</span>
                    <span>ID: 1003</span>
                </li>
                <li>
                    <span>Universitas Airlangga</span>
                    <span>ID: 1004</span>
                </li>
                <li>
                    <span>Universitas Brawijaya</span>
                    <span>ID: 1005</span>
                </li>
                <li>
                    <span>Universitas Diponegoro</span>
                    <span>ID: 1006</span>
                </li>
                <li>
                    <span>Universitas Hasanuddin</span>
                    <span>ID: 1007</span>
                </li>
                <li>
                    <span>Universitas Padjadjaran</span>
                    <span>ID: 1008</span>
                </li>
                <li>
                    <span>Universitas Sebelas Maret</span>
                    <span>ID: 1009</span>
                </li>
                <li>
                    <span>Universitas Sumatera Utara</span>
                    <span>ID: 1010</span>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
