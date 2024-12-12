<?php
include("config.php");

if(isset($_POST['tambah_pegawai'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telpon = $_POST['no_telpon'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];

    $sql = "INSERT INTO pegawai (nama, alamat, email, no_telpon, agama, jenis_kelamin, jabatan, departemen) 
            VALUES ('$nama', '$alamat', '$email', '$no_telpon', '$agama', '$jenis_kelamin', '$jabatan', '$departemen')";

    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list-pegawai.php?status=sukses'); 
    } else {
        header('Location: form-tambah-pegawai.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}