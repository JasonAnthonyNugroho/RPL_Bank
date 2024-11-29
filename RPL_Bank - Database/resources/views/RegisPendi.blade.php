<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin Pendidikan - MyBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            color: #333;
        }

        .header {
            background-color: #0033a0;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .container {
            max-width: 600px;
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            resize: vertical;
            height: 80px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        .button-submit {
            background-color: #0033a0;
            color: #ffffff;
        }

        .button-back {
            background-color: #ccc;
            color: #333;
        }

        .button:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <div class="header">MyBCA - Registrasi Admin Pendidikan</div>

    <div class="container">
        <h2>Formulir Registrasi</h2>
        @if ($errors->any())
            <div
                style="background: #f8d7da; padding: 10px; color: #721c24; border: 1px solid #f5c6cb; border-radius: 5px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('saveAkun') }}" method="post">
            @csrf
            <!-- Nomor Telepon -->
            <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="no_telp" name="no_telp" placeholder="Masukkan nomor telepon" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Masukkan email universitas" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="username" name="username_instansi" placeholder="Masukan Username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password_instansi" placeholder="Masukkan Password" required>
            </div>

            <!-- Button Group -->
            <div class="button-group">
                <button type="button" class="button button-back" onclick="history.back()">Kembali</button>
                <button type="submit" class="button button-submit" onclick="window.location.href='/'">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>