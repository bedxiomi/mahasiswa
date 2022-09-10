<?php
if(isset($_POST['btnlogin'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin@gmail"){
        if($password == "admin"){
        // login sukses
        header('location:index.php');
    } else {
        // gagal
        header('location:login.php');
    }}
}


?>