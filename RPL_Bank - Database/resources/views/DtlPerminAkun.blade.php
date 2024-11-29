<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Universitas - myBCA</title>
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

        .univ-details-box {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .detail-item {
            margin-bottom: 10px;
        }

        .detail-item span {
            font-weight: bold;
            color: #333;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .action-button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .approve-button {
            background-color: #4CAF50;
            color: white;
        }

        .reject-button {
            background-color: #E74C3C;
            color: white;
        }

        .back-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-title">MyBCA Admin Dashboard</div>
        <div class="header-subtitle">Detail Informasi Universitas</div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">Detail Informasi Universitas</div>

        <!-- University Details Box -->
        <div class="univ-details-box">
            <div class="detail-item"><span>Nama Universitas:</span> Universitas Gadjah Mada</div>
            <div class="detail-item"><span>Email:</span> admin@ugm.ac.id</div>
            <div class="detail-item"><span>Telepon:</span> +62 274 588688</div>
            <div class="detail-item"><span>Alamat:</span> Bulaksumur, Yogyakarta 55281, Indonesia</div>
            <div class="detail-item"><span>Tanggal Registrasi:</span> 2024-11-01</div>
            <div class="detail-item"><span>Deskripsi:</span> Universitas Gadjah Mada adalah universitas terkemuka di Indonesia, memiliki berbagai program studi unggulan di bidang sains, teknologi, dan sosial.</div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button class="action-button approve-button" onclick="window.location.href='HomeAdmin'">Setujui</button>
            <button class="action-button reject-button">Tolak</button>
        </div>

        <!-- Back Button -->
        <button class="back-button" onclick="history.back()">Kembali</button>
    </div>
</body>
</html>
