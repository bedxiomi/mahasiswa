<?php 
include ("config/config.php");
 if(isset($_POST['btnLogin'])){
    
 $username = htmlspecialchars($_POST['username']);
 $password = htmlspecialchars($_POST['password']);
 
 $query = mysqli_query($konek, "select * from user where username='$username'");


$countdata = mysqli_num_rows($query);
$data = mysqli_fetch_array($query);

if($countdata>0){
    if (password_verify($password, $data['password'])){
            } 
            else{
                echo "password salah";
                echo $username;
                echo $data['username'];
                echo $password;
                echo $data['password'];
            }
}else{
    echo "akun tidak tersedia";
    echo $username;
    echo $data['password'];
    echo $password;
    echo $data['password'];
}


 }


?>