<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Transaksi - myBCA</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .menu {
            display: flex;
            gap: 15px;
            font-size: 16px;
        }
        .container {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .transaction-title {
            font-size: 24px;
            color: #0033a0;
            margin-bottom: 20px;
        }
        .filter-section {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .filter-section input[type="date"],
        .filter-section select {
            padding: 8px;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .transaction-history {
            width: 100%;
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .transaction-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .transaction-item:last-child {
            border-bottom: none;
        }
        .transaction-details {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .transaction-title {
            color: #333;
            font-size: 16px;
        }
        .transaction-status {
            color: green;
            font-size: 14px;
        }
        .transaction-date {
            font-size: 14px;
            color: #777;
        }
        .transaction-amount {
            color: #0033a0;
            font-size: 16px;
            font-weight: bold;
            text-align: right;
        }
        .transaction-link {
            color: #007bff;
            font-size: 14px;
            text-decoration: none;
            margin-top: 5px;
        }

        /* Styling untuk tombol Kembali */
        .back-button {
            padding: 10px 20px;
            background-color: #0033a0;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
            margin: 20px 0;
        }

        /* Center button in the page */
        .back-button-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <div><img src="https://via.placeholder.com/80x20?text=myBCA" alt="myBCA Logo"></div>
        <div class="menu">
            <a href="#" style="color: white;">Beranda</a>
            <a href="#" style="color: white;">Transaksi</a>
            <a href="#" style="color: white;">Akun Saya</a>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <div class="transaction-title">Riwayat Transaksi</div>

        <!-- Filter Section -->
        <div class="filter-section">
            <input type="date" id="filter-date" placeholder="Pilih Tanggal">
            <select id="sort-order">
                <option value="newest">Terbaru</option>
                <option value="oldest">Terlama</option>
            </select>
        </div>

        <!-- Transaction History Section -->
        <div class="transaction-history">
            <!-- Transaction Item -->
            <div class="transaction-item">
                <div class="transaction-details">
                    <div class="transaction-title">Pembayaran Semester 2023/2024</div>
                    <div class="transaction-status">Berhasil</div>
                    <div class="transaction-date">26 Okt 2024</div>
                </div>
                <div>
                    <div class="transaction-amount">IDR 7,500,000.00</div>
                    <a href="#" class="transaction-link">Lihat Detail</a>
                </div>
            </div>
            <!-- Transaction Item -->
            <div class="transaction-item">
                <div class="transaction-details">
                    <div class="transaction-title">Pembayaran Semester 2023/2024</div>
                    <div class="transaction-status">Berhasil</div>
                    <div class="transaction-date">26 Okt 2024</div>
                </div>
                <div>
                    <div class="transaction-amount">IDR 8,200,000.00</div>
                    <a href="#" class="transaction-link">Lihat Detail</a>
                </div>
            </div>
            <!-- Additional transaction items omitted for brevity -->
        </div>

        <!-- Tombol Kembali -->
        <div class="back-button-container">
            <a href="HomePendi" class="back-button">Kembali</a>
        </div>

    </div>

    <!-- JavaScript -->
    <script>
        document.getElementById("filter-date").addEventListener("change", function() {
            const selectedDate = this.value;
            alert("Filtering transactions by date: " + selectedDate);
            // Add functionality here to filter transactions by the selected date
        });

        document.getElementById("sort-order").addEventListener("change", function() {
            const sortOrder = this.value;
            alert("Sorting transactions by: " + sortOrder);
            // Add functionality here to sort transactions by the selected order
        });
    </script>

</body>
</html>
