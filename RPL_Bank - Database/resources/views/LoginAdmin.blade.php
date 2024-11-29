<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Admin Portal</title>
    <style>
        /* Style CSS disini tetap sama */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #0033a0;
            padding: 20px;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            padding: 20px;
        }

        .login-panel {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .login-panel h2 {
            color: #0033a0;
            font-size: 28px;
            margin-bottom: 15px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .button {
            width: 100%;
            padding: 12px;
            background-color: #0033a0;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #00297e;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .footer a {
            color: #0033a0;
            text-decoration: none;
        }

        .alert {
            background-color: #fff3cd;
            color: #856404;
            padding: 10px;
            margin-top: 20px;
            border: 1px solid #ffeeba;
            border-radius: 5px;
            font-size: 14px;
            text-align: left;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert a {
            color: #856404;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="header">BCA Admin Portal</div>

    <div class="container">
        <div class="login-panel">
            <h2>Admin Login</h2>
            <p>Selamat Datang, Admin BCA</p>

            <!-- Pesan error jika login gagal -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Tambahkan Form disini -->
            <form action="{{ route('ceklogin') }}" method="POST">
                @csrf
                <input type="hidden" name="role" value="admin_bank">
                <div class="input-group">
                    <label>ID</label>
                    <input type="text" name="username_admin" placeholder="Masukkan ID Anda" required>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password_admin" placeholder="Masukkan Password Anda" required>
                </div>
                <button type="submit" class="button">Masuk</button>
            </form>


            <div class="footer">
                <a href="#">Lupa ID</a> | <a href="#">Reset Password</a>
            </div>
            <div class="alert">
                <p>Perbarui password secara berkala untuk menjaga keamanan akun dan data transaksi Anda.</p>
                <a href="#">Lihat informasi keamanan</a>
            </div>
        </div>
    </div>
</body>

</html>
