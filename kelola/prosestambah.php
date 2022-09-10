<?php
include '../config/config.php';
$nim          = $_POST['nim'];
$nama         = $_POST['nama'];
$jk           = $_POST['jk'];
$telp         = $_POST['telp'];
$alamat       = $_POST['alamat'];

$query ="INSERT INTO mahasiswa (nim, nama, jk, telp, alamat) VALUES ('$nim', '$nama', '$jk', '$telp', '$alamat')";

$result = mysqli_query($konek, $query);
if ($result){

    header('location: ../index.php');
} else {
    echo "Data Gagal ditambahkan";
}


?>