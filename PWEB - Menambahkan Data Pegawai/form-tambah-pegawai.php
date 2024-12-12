<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penambahan Pegawai Baru | SMK Tomorrowland</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #eef2f3;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        header h3 {
            font-size: 1.8rem;
            color: #2c3e50;
            margin: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        .gender-options {
            display: flex;
            gap: 10px;
        }

        input[type="submit"] {
            background: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #2980b9;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            appearance: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h3>Formulir Pendaftaran Pegawai Baru</h3>
        </header>
        <form action="proses-penambahan-pegawai.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea name="alamat" placeholder="Alamat Lengkap" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Alamat Email" required>
            </div>
            <div class="form-group">
                <label for="no_telpon">No. Telpon:</label>
                <input type="tel" name="no_telpon" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama:</label>
                <select name="agama" required>
                    <option value="">Pilih Agama</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="gender-options">
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" placeholder="Jabatan" required>
            </div>
            <div class="form-group">
                <label for="departemen">Departemen:</label>
                <input type="text" name="departemen" placeholder="Departemen" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah Pegawai" name="tambah_pegawai">
            </div>
        </form>
    </div>
</body>
</html>