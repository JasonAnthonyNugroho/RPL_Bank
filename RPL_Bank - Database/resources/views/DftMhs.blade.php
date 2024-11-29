<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa - MyBCA</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        /* Header Styles */
        header {
            background-color: #0033a0;  /* Warna biru gelap */
            color: white;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .header-container h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        /* Table Container */
        .table-container {
            margin: 30px auto;
            width: 90%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #0033a0;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #0033a0;
            color: white;
            font-size: 14px;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        /* Action Buttons */
        .btn-edit,
        .btn-delete {
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin: 0 5px;
            display: inline-block;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        /* Back Button */
        .btn-back {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-back:hover {
            background-color: #c82333;
        }

        /* Modal Styles */
        #editModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        #modalOverlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        #editModal form div {
            margin-bottom: 10px;
        }

        #editModal form div label {
            display: block;
            margin-bottom: 5px;
        }

        #editModal form div input,
        #editModal form div select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        #editModal button {
            margin-top: 10px;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #editModal button[type="submit"] {
            background-color: #28a745;
            color: white;
        }

        #editModal button[type="button"] {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <h1>Daftar Mahasiswa - MyBCA</h1>
        </div>
    </header>

    <!-- Table Container -->
    <div class="table-container">
        <h2>Data Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Jumlah SKS</th>
                    <th>No. VA</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama_mhs }}</td>
                        <td>{{ $mhs->alamat_mhs }}</td>
                        <td>{{ $mhs->gender_mhs }}</td>
                        <td>{{ $mhs->email_mhs }}</td>
                        <td>{{ $mhs->no_telp_mhs }}</td>
                        <td>{{ $mhs->jumlah_sks ?? 'N/A' }}</td>
                        <td>{{ $mhs->no_va ?? 'N/A' }}</td>
                        <td>
                            <button class="btn-edit" onclick="openEditModal({{ $mhs->id }})">Edit</button>
                            <a href="#" class="btn-delete">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" style="text-align: center;">Tidak ada data mahasiswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Back Button -->
        <a class="btn-back" href="/HomePendi">Kembali</a>
    </div>

    <div id="editModal">
        <form id="editForm" method="POST">
            @csrf
            @method('PUT') <!-- Tambahkan directive ini -->
            <h3>Edit Data Mahasiswa</h3>
            <div>
                <label for="nama_mhs">Nama:</label>
                <input type="text" id="nama_mhs" name="nama_mhs" required>
            </div>
            <div>
                <label for="alamat_mhs">Alamat:</label>
                <input type="text" id="alamat_mhs" name="alamat_mhs" required>
            </div>
            <div>
                <label for="gender_mhs">Gender:</label>
                <select id="gender_mhs" name="gender_mhs" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="email_mhs">Email:</label>
                <input type="email" id="email_mhs" name="email_mhs" required>
            </div>
            <div>
                <label for="no_telp_mhs">Telepon:</label>
                <input type="text" id="no_telp_mhs" name="no_telp_mhs" required>
            </div>
            <button type="submit">Update</button>
            <button type="button" onclick="closeModal()">Cancel</button>
        </form>
    </div>
    <div id="modalOverlay" onclick="closeModal()"></div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 MyBCA. All rights reserved.</p>
    </footer>

    <script>
        function openEditModal(id) {
    document.getElementById('editModal').style.display = 'block';
    document.getElementById('modalOverlay').style.display = 'block';

    fetch(`/mahasiswa/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('editForm').action = `/mahasiswa/${id}/update`;
            document.getElementById('nama_mhs').value = data.nama_mhs;
            document.getElementById('alamat_mhs').value = data.alamat_mhs;
            document.getElementById('gender_mhs').value = data.gender_mhs;
            document.getElementById('email_mhs').value = data.email_mhs;
            document.getElementById('no_telp_mhs').value = data.no_telp_mhs;
        });
}

        function closeModal() {
            document.getElementById('editModal').style.display = 'none';
            document.getElementById('modalOverlay').style.display = 'none';
        }
    </script>
</body>
</html>
