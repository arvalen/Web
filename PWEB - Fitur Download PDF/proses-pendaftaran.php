<?php
include("config.php");

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $foto = null;
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){
        $nama_file = $_FILES['foto']['name'];
        $ukuran_file = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmp_file = $_FILES['foto']['tmp_name'];
        
        $ekstensi_diperbolehkan = array('jpg','jpeg','png','gif');
        $x = explode('.', $nama_file);
        $ekstensi = strtolower(end($x));
        
        $foto = 'foto_'.uniqid().'.'.$ekstensi;
        
        $lokasi_upload = 'C:/xampp/htdocs/upload/images/'.$foto;
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran_file < 5000000){ 
                move_uploaded_file($tmp_file, $lokasi_upload);
            } else {
                echo "Ukuran file terlalu besar!";
                exit;
            }
        } else {
            echo "Ekstensi file tidak diperbolehkan!";
            exit;
        }
    }

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) 
            VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list-siswa.php');
    } else {
        die("Gagal menyimpan data: ".mysqli_error($db));
    }
}
?>