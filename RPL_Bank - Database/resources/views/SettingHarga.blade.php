<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Harga Pembayaran - MyBCA</title>
    <style>
        /* Styling sama seperti sebelumnya */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc;
            color: #333;
        }
        .header {
            background-color: #0033a0;
            color: white;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header .back-button {
            background-color: white;
            color: #0033a0;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .header .back-button:hover {
            background-color: #e9eef3;
            transform: translateY(-2px);
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            font-size: 32px;
            color: #0033a0;
            margin-bottom: 40px;
            text-align: center;
        }
        .price-list {
            margin-bottom: 40px;
        }
        .price-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            background-color: #f1f4f8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            gap: 20px;
        }
        .price-item label {
            flex: 2;
            font-weight: bold;
            color: #0033a0;
            font-size: 20px;
        }
        .price-item input {
            flex: 1;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }
        .total-price {
            font-size: 26px;
            font-weight: bold;
            color: #0033a0;
        }
        .submit-button {
            padding: 12px 24px;
            background-color: #0033a0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        .submit-button:hover {
            background-color: #002080;
            transform: translateY(-2px);
        }
        .alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
}
.alert.success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.alert.error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}
    </style>
</head>
<body>
    <div class="header">
        <button class="back-button" onclick="window.location.href='/HomePendi'">Back</button>
        Pengaturan Harga Pembayaran
    </div>

    <div class="container">
        <h1>Pengaturan Harga Pembayaran</h1>

        <!-- Alert Messages -->
        @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="alert error">
            {{ session('error') }}
        </div>
        @endif

        <form id="price-form" action="{{ route('updatePrices') }}" method="POST">
            @csrf
            <div class="price-list">
                <!-- Harga SPP -->
                <div class="price-item">
                    <label for="spp">Harga SPP</label>
                    <input type="number" id="spp" name="spp" value="{{ $prices->spp }}" required>
                </div>
                <!-- Harga Kesehatan -->
                <div class="price-item">
                    <label for="kesehatan">Harga Kesehatan</label>
                    <input type="number" id="kesehatan" name="kesehatan" value="{{ $prices->kesehatan }}" required>
                </div>
                <!-- Harga Fasilitas -->
                <div class="price-item">
                    <label for="fasilitas">Harga Fasilitas</label>
                    <input type="number" id="fasilitas" name="fasilitas" value="{{ $prices->fasilitas }}" required>
                </div>
                <!-- Harga per SKS -->
                <div class="price-item">
                    <label for="sks">Harga per SKS</label>
                    <input type="number" id="hrg_sks" name="hrg_sks" value="{{ $prices->hrg_sks }}" required>
                </div>
            </div>
            <div class="form-footer">
                <button type="submit" class="submit-button">Simpan</button>
                <div class="total-price">
                    Total Harga: Rp <span id="total-price">0</span>
                </div>
            </div>
        </form>
    </div>

    <script>
        function calculateTotal() {
            const spp = parseInt(document.getElementById('spp').value) || 0;
            const kesehatan = parseInt(document.getElementById('kesehatan').value) || 0;
            const fasilitas = parseInt(document.getElementById('fasilitas').value) || 0;
            const total = spp + kesehatan + fasilitas;
            document.getElementById('total-price').innerText = total.toLocaleString('id-ID');
        }

        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', calculateTotal);
        });

        calculateTotal(); // Hitung total saat halaman pertama kali dimuat

        // Auto-hide alert
        setTimeout(() => {
            const alert = document.querySelector('.alert');
            if (alert) {
                alert.style.transition = "opacity 0.5s";
                alert.style.opacity = 0;
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000);
    </script>
</body>
</html>
