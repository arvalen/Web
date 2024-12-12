<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai | SMK Tomorrowland</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #6750a4;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            text-align: center;
            margin-top: 20px;
        }
        nav a {
            padding: 10px 20px;
            background-color: #6750a4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        nav a:hover {
            background-color: #5a45a1;
        }
        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 20px;
            text-align: center;
        }
        th {
            background-color: #6750a4;
            color: white;
        }
        td {
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }
        td a {
            color: #6750a4;
            text-decoration: none;
            font-weight: bold;
        }
        td a:hover {
            text-decoration: underline;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .action-buttons a {
            padding: 8px 16px;
            background-color: #e7e7e7;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .action-buttons a:hover {
            background-color: #d3d3d3;
        }
    </style>
</head>
<body>
    <header>
        <h3>Daftar Pegawai SMK Tomorrowland</h3>
    </header>
    <nav>
        <a href="form-tambah-pegawai.php">[+] Tambah Pegawai Baru</a>
    </nav>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pegawai";
            $query = mysqli_query($db, $sql);

            while($pegawai = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$pegawai['id']."</td>";
                echo "<td>".$pegawai['nama']."</td>";
                echo "<td>".$pegawai['alamat']."</td>";
                echo "<td>".$pegawai['email']."</td>";
                echo "<td>".$pegawai['no_telpon']."</td>";
                echo "<td>".$pegawai['agama']."</td>";
                echo "<td>".$pegawai['jenis_kelamin']."</td>";
                echo "<td>".$pegawai['jabatan']."</td>";
                echo "<td>".$pegawai['departemen']."</td>";
                echo "<td class='action-buttons'>";
                echo "<a href='form-edit-pegawai.php?id=".$pegawai['id']."'>Edit</a>";
                echo "<a href='hapus-pegawai.php?id=".$pegawai['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>