<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f4f8;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            color: #0033a0;
            font-size: 28px;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #0033a0;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #0033a0;
            box-shadow: 0 0 5px rgba(0, 51, 160, 0.5);
        }

        .form-actions {
            text-align: center;
            margin-top: 30px;
        }

        .form-actions button {
            padding: 10px 20px;
            background-color: #0033a0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .form-actions button:hover {
            background-color: #002080;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            background-color: #cccccc;
            color: #333;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #aaaaaa;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <a href="HomePendi" class="back-button">Kembali</a>
        <div class="container">
            @if(session('success'))
                <div style="background: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="header">
                <h1>Form Input Data Mahasiswa</h1>
            </div>

            <form action="{{ route('tambahMhs') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM mahasiswa" value="{{ old('nim') }}" required>
                    <div id="nim-error" style="color: red;"></div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama mahasiswa" value="{{ old('nama') }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Mahasiswa</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat mahasiswa" value="{{ old('alamat') }}" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="gender">Gender Mahasiswa</label>
                        <select id="gender" name="gender" required>
                            <option value="">-- Pilih Gender --</option>
                            <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="email">Email Mahasiswa</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email mahasiswa" value="{{ old('email') }}" required>
                    <div id="email-error" style="color: red;"></div>
                </div>
                </div>
                <div class="form-group">
                    <label for="telpon">Nomor Telepon Mahasiswa</label>
                    <input type="text" id="telpon" name="telpon" placeholder="Masukkan nomor telepon mahasiswa" value="{{ old('telpon') }}" required>
                    <div id="telpon-error" style="color: red;"></div>
                </div>
                <div class="form-actions">
                    <button type="submit" id="submit-btn">Submit</button>
                </div>
            </form>
        </div>

        <footer>
            &copy; 2024 BCA. Hak Cipta Dilindungi.
        </footer>

        <script>
            $(document).ready(function () {
                function validateInput(field, route, errorDiv, submitBtn) {
                    $(field).on('blur', function () {
                        const value = $(this).val();

                        if (value.trim() !== "") {
                            $.ajax({
                                url: route,
                                method: "POST",
                                data: {
                                    [field.replace('#', '')]: value,
                                    _token: "{{ csrf_token() }}"
                                },
                                success: function (response) {
                                    if (response.exists) {
                                        $(errorDiv).text(response.message); // Tampilkan pesan error
                                        $(submitBtn).prop('disabled', true); // Disable tombol submit
                                    } else {
                                        $(errorDiv).text(""); // Bersihkan pesan error
                                        $(submitBtn).prop('disabled', false); // Enable tombol submit
                                    }
                                }
                            });
                        }
                    });
                }

                // Validasi NIM
                validateInput('#nim', "{{ route('checkNIM') }}", '#nim-error', '#submit-btn');
                // Validasi Email
                validateInput('#email', "{{ route('checkEmail') }}", '#email-error', '#submit-btn');
                // Validasi Nomor Telepon
                validateInput('#telpon', "{{ route('checkTelpon') }}", '#telpon-error', '#submit-btn');
            });
        </script>
    </body>
    </html>
