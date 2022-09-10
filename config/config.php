<?php
$konek = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($konek, "mahasiswa");
if($konek){
//   echo "KOneksi berhasil";
}else{
    echo"gagal";
}

?>