<?php
include '../config/config.php';
$nim          = $_POST['nim'];
$nama         = $_POST['nama'];
$jk           = $_POST['jk'];
$telp         = $_POST['telp'];
$alamat       = $_POST['alamat'];

$query ="UPDATE mahasiswa SET
nama    = '$nama',
jk      = '$jk',
telp    = '$telp',
alamat  = '$alamat'
WHERE nim = '$nim' ";

$result = mysqli_query($konek, $query);
if ($result){

    header('location: ../index.php');
} else {
    echo "Data Gagal Diubah";
}


?>