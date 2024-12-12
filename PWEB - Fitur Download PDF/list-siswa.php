<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Tomorrowland</title>
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
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 20px;
            text-align: center;
            vertical-align: middle;
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
        .foto-siswa {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #6750a4;
        }
        .no-foto {
            background-color: #e0e0e0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h3>Data Pendaftaran Siswa Baru SMK Tomorrowland</h3>
    </header>
    <nav>
    <a href="form-daftar.php">[+] Tambah Siswa Baru</a>
    <a href="pdf.php" target="_blank">Download PDF</a>
    </nav>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            $no = 1;

            while($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                
                echo "<td>";
                if (!empty($siswa['foto']) && file_exists('C:/xampp/htdocs/upload/images/'.$siswa['foto'])) {
                    echo "<img src='../upload/images/".$siswa['foto']."' class='foto-siswa' alt='Foto Siswa'>";
                } else {
                    echo "<div class='no-foto'>Tidak Ada Foto</div>";
                }
                echo "</td>";

                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>".$siswa['sekolah_asal']."</td>";
                echo "<td class='action-buttons'>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
                echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>