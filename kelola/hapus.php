<?php
include '../config/config.php';
$nim          = $_POST['nim'];

$query ="DELETE FROM mahasiswa WHERE nim = '$nim' ";
$result = mysqli_query($konek, $query);
if ($result){

    header('location: ../index.php');
} else {
    echo "Data Gagal Dihapus";
}


?>