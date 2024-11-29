<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa - MyBCA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
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
            max-width: 800px;
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
        }
        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-group input[type="file"] {
            padding: 5px;
        }
        .button {
            padding: 10px 20px;
            background-color: #0033a0;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            text-align: center;
        }
        .button:hover {
            opacity: 0.9;
        }
        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #0033a0;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">MyBCA - Input Data Mahasiswa</div>

    <div class="container">
        <h2>Input Data Mahasiswa</h2>

        <!-- Form Input Data Mahasiswa -->
        <form>
            <div class="form-group">
                <label for="universityName">Nama Universitas:</label>
                <input type="text" id="universityName" name="universityName" placeholder="Universitas Kristen Duta Wacana" required>
            </div>

            <div class="form-group">
                <label for="fileUpload">Unggah File CSV:</label>
                <input type="file" id="fileUpload" name="fileUpload" accept=".csv" required>
            </div>

            <button type="submit" class="button">Unggah Data</button>
        </form>

        <!-- Pratinjau List Data Mahasiswa -->
        <div class="table-container">
            <h3>Pratinjau Data Mahasiswa</h3>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Nomor VA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Gavri</td>
                        <td>123456789</td>
                        <td>987654321001</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jason</td>
                        <td>234567890</td>
                        <td>987654321002</td>
                    </tr>
                    <!-- Pratinjau data lainnya akan muncul setelah file CSV diunggah -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
