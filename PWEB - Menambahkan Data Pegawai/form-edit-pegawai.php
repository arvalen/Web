<?php

include("config.php");

if(!isset($_GET['id'])) {
    header('Location: list-pegawai.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1) {
    die("Data pegawai tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulir Edit Pegawai | SMK Tomorrowland</title>
	<style>
		body {
			font-family: 'Arial', sans-serif;
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
		form {
			width: 70%;
			margin: 30px auto;
			padding: 20px;
			background-color: white;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		fieldset {
			border: none;
		}
		legend {
			font-size: 1.5em;
			font-weight: bold;
			color: #6750a4;
		}
		label {
			display: block;
			margin-bottom: 8px;
			font-size: 1em;
		}
		input, select, textarea {
			width: 100%;
			padding: 10px;
			margin: 10px 0 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 1em;
		}
		input[type="radio"] {
			width: auto;
			margin-right: 5px;
		}
		textarea {
			resize: vertical;
			height: 100px;
		}
		input[type="submit"] {
			background-color: #6750a4;
			color: white;
			border: none;
			padding: 12px 30px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 1.1em;
		}
		input[type="submit"]:hover {
			background-color: #5a45a1;
		}
		.radio-group label {
			display: inline-block;
			margin-right: 20px;
		}
		select {
			background-color: #f9f9f9;
		}
	</style>
</head>
<body>
    <header>
        <h3>Formulir Edit Pegawai</h3>
    </header>

    <form action="proses-edit-pegawai.php" method="POST">
        <fieldset>
            <legend>Edit Data Pegawai</legend>
            <input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />

            <p>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $pegawai['nama'] ?>" required>
            </p>
            <p>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"><?php echo $pegawai['alamat'] ?></textarea>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Alamat Email" value="<?php echo $pegawai['email'] ?>" required>
            </p>
            <p>
                <label for="no_telpon">No. Telpon:</label>
                <input type="tel" name="no_telpon" placeholder="Nomor Telepon" value="<?php echo $pegawai['no_telpon'] ?>" required>
            </p>
            <p>
                <label for="agama">Agama:</label>
                <select name="agama" required>
                    <option value="Islam" <?php if($pegawai['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                    <option value="Kristen" <?php if($pegawai['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                    <option value="Hindu" <?php if($pegawai['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                    <option value="Budha" <?php if($pegawai['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                </select>
            </p>
            <p class="radio-group">
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php if($pegawai['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if($pegawai['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>> Perempuan</label>
            </p>
            <p>
                <label for="jabatan">Jabatan:</label>
                <input type="text" name="jabatan" placeholder="Jabatan" value="<?php echo $pegawai['jabatan'] ?>" required>
            </p>
            <p>
                <label for="departemen">Departemen:</label>
                <input type="text" name="departemen" placeholder="Departemen" value="<?php echo $pegawai['departemen'] ?>" required>
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>
</html>