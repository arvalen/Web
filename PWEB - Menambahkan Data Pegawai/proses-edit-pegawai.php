<?php

include("config.php");

if(isset($_POST['simpan'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_telpon = $_POST['no_telpon'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];

    $sql = "UPDATE pegawai SET 
            nama='$nama', 
            alamat='$alamat', 
            email='$email', 
            no_telpon='$no_telpon', 
            agama='$agama', 
            jenis_kelamin='$jenis_kelamin', 
            jabatan='$jabatan', 
            departemen='$departemen' 
            WHERE id=$id";

    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list-pegawai.php?status=sukses');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}