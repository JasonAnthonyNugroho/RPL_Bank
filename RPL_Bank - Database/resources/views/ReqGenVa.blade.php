<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persetujuan Permintaan Generate VA - MyBCA</title>
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
            padding: 15px;
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
            padding: 20px;
        }

        .section-title {
            font-size: 18px;
            color: #0033a0;
            margin-bottom: 15px;
        }

        .request-list {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .univ-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .univ-item:last-child {
            border-bottom: none;
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

        .univ-email, .univ-date {
            color: #777;
            font-size: 14px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .detail-button {
            padding: 8px 16px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            text-decoration: none;
        }

        .detail-button:hover {
            background-color: #0056b3;
        }

        .back-button {
            background-color: #0033a0;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-title">MyBCA Admin Dashboard</div>
        <div class="header-subtitle">Persetujuan Permintaan Generate VA</div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">Daftar Universitas yang Mengajukan Permintaan Generate VA</div>

        <!-- Request List -->
        <div class="request-list">
            <!-- University Item 1 -->
            <div class="univ-item">
                <div class="univ-details">
                    <div class="univ-name">Universitas Indonesia</div>
                    <div class="univ-email">Email: admin@ui.ac.id</div>
                    <div class="univ-date">Tanggal Permintaan: 2024-11-03</div>
                </div>
                <div class="action-buttons">
                    <a href="ValidVa" class="detail-button">Lihat Detail</a>
                </div>
            </div>
            <!-- More university items can be added similarly -->
        </div>

        <!-- Back Button -->
        <a href="HomeAdmin" class="back-button">Kembali</a>
    </div>
</body>
</html>
