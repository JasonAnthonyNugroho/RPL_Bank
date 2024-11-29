<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Universitas - MyBCA</title>
    <style>
        /* General Styles */
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
            text-align: center;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .container h1 {
            font-size: 26px;
            color: #0033a0;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #0033a0;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 51, 160, 0.2);
        }
        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .button-group button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }
        .button-group button:hover {
            transform: translateY(-2px);
        }
        .button-submit {
            background-color: #0033a0;
            color: white;
        }
        .button-submit:hover {
            background-color: #002080;
        }
        .button-back {
            background-color: #f1f4f8;
            color: #0033a0;
        }
        .button-back:hover {
            background-color: #d9e3f0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header">Pendaftaran Universitas - MyBCA</div>

    <!-- Main Container -->
    <div class="container">
        <h1>Formulir Pendaftaran Universitas</h1>
        <form action="/submit-universitas" method="POST">
            <!-- Nama Universitas -->
            <div class="form-group">
                <label for="nama-universitas">Nama Universitas:</label>
                <input type="text" id="nama-universitas" name="nama_universitas" placeholder="Masukkan nama universitas" required>
            </div>

            <!-- Alamat Universitas -->
            <div class="form-group">
                <label for="alamat-universitas">Alamat Universitas:</label>
                <textarea id="alamat-universitas" name="alamat_universitas" rows="3" placeholder="Masukkan alamat universitas" required></textarea>
            </div>

            <!-- Email Universitas -->
            <div class="form-group">
                <label for="email-universitas">Email Universitas:</label>
                <input type="email" id="email-universitas" name="email_universitas" placeholder="Masukkan email universitas" required>
            </div>

            <!-- No. Telepon Universitas -->
            <div class="form-group">
                <label for="telepon-universitas">No. Telepon Universitas:</label>
                <input type="tel" id="telepon-universitas" name="telepon_universitas" placeholder="Masukkan nomor telepon universitas" required>
            </div>

            <!-- Website Universitas -->
            <div class="form-group">
                <label for="website-universitas">Website Universitas:</label>
                <input type="url" id="website-universitas" name="website_universitas" placeholder="Masukkan URL website universitas">
            </div>

            <!-- Jumlah Mahasiswa -->
            <div class="form-group">
                <label for="jumlah-mahasiswa">Jumlah Mahasiswa:</label>
                <input type="number" id="jumlah-mahasiswa" name="jumlah_mahasiswa" placeholder="Masukkan jumlah mahasiswa">
            </div>

            <!-- Jenis Universitas -->
            <div class="form-group">
                <label for="jenis-universitas">Jenis Universitas:</label>
                <input type="text" id="jenis-universitas" name="jenis_universitas" placeholder="Masukkan jenis universitas (contoh: negeri, swasta)">
            </div>

            <!-- Button Actions -->
            <div class="button-group">
                <button type="submit" class="button-submit" onclick="window.location.href='HomePendi'">Submit</button>
                <button type="button" class="button-back" onclick="window.location.href='HomePendi'">Kembali</button>
            </div>
        </form>
    </div>
</body>
</html>
