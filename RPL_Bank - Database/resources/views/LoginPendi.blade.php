<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #0033a0;
            padding: 15px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        .left {
            width: 60%;
            margin-right: 20px;
        }

        .banner {
            background-color: #0073e6;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .tips {
            display: flex;
            margin-top: 20px;
            gap: 10px;
        }

        .tip-box {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 15px;
            flex: 1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .right {
            width: 30%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .login-form h2 {
            color: #0033a0;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .footer {
            margin-top: 20px;
            color: #555;
            font-size: 12px;
        }

        .alert {
            background-color: #fff3cd;
            color: #856404;
            padding: 10px;
            margin-top: 15px;
            border: 1px solid #ffeeba;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="header">myBCA</div>

    <div class="container">
        <!-- Left Section -->
        <div class="left">
            <div class="banner">
                <h2>The New Gebyar Hadiah BCA</h2>
                <p>1 Okt 2024 - 31 Jan 2025</p>
                <p>Hadiah Utama: 120 Honda Vario, 4 Mercedes-Benz, 12 Toyota Innova Zenix</p>
            </div>

            <div class="tips">
                <div class="tip-box">
                    <h3>EDUKATIPS</h3>
                    <p><strong>8 tips menjaga Keamanan Data Internet Banking & Kartu Kredit</strong></p>
                    <p>Seiring dengan perkembangan informasi dan teknologi, keamanan data sangat penting untuk
                        diperhatikan...</p>
                </div>
                <div class="tip-box">
                    <h3>Awas Modus</h3>
                    <p><strong>Awas Modus Penipuan Terkini Lakukan 3 Hal Ini</strong></p>
                    <p>Keberadaan internet dan media sosial membuat kita semakin mudah membagikan informasi...</p>
                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="right">
            <div class="login-form">
                <h2>Halo, Selamat Datang!</h2>
                @if (session('alert'))
                    <div class="alert">
                        {{ session('alert') }}
                    </div>
                @endif
                <form action="{{ route('ceklogin') }}" method="post">
                    @csrf
                    <input type="hidden" name="role" value="admin_instansi">
                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username_instansi" placeholder="Masukkan Username Instansi">
                    </div>
                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password_instansi" placeholder="Masukkan Password">
                    </div>
                    <button class="button" onclick="window.location.href='HomePendi'">Masuk</button>
                    <div class="footer">
                        <a href="#">Lupa BCA ID</a> | <a href="#">Reset Password</a>
                        <p>Belum punya BCA ID? <a href="RegisPendi">Registrasi</a></p>
                        <p>Login admin Bank <a href="LoginAdmin">Login Admin Bank</a></p>
                    </div>
                </form>
            </div>

            <div class="alert">
                <p>Perbarui Password BCA ID secara berkala untuk keamanan data dan transaksi Anda.</p>
                <a href="#">Lihat informasi selengkapnya</a>
            </div>
        </div>
    </div>
</body>

</html>