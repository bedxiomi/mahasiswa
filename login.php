<?php
session_start();
require ("config/config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap v5.1.3 CDNs -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js" />

    <!-- CSS File -->
</head>

<body class="bg-warning ">
    <section id="login">
        <div class="container mt-5 p-5">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-lg p-3  bg-body rounded">
                        <form action="" method="post">
                            <h3 class="text-center">Halaman Login</h3>
                            <div class="card-body justify-content-center">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="username" name="username"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                            <path
                                                d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg></span>
                                    <input type="email" class="form-control" id="username" name="username"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-unlock-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2z" />
                                        </svg></span>
                                    <input type="password" class="form-control" id="password" name="password"
                                        aria-describedby="basic-addon3" />
                                </div>
                                <div class="row mb-3 ps-3 pe-3 justify-content-center">
                                    <button type="submit" id="btnLogin" name="btnLogin"
                                        class="btn btn-success form-control">Login</button>
                                </div>

                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="mt-3">
                        <?php
                     if(isset($_POST['btnLogin'])){
                        $username = htmlspecialchars($_POST['username']);
                        $password = htmlspecialchars($_POST['password']);
                        
                        $query = mysqli_query($konek, "select * from user where username='$username'");
                        $countdata = mysqli_num_rows($query);
                        $data = mysqli_fetch_array($query);
                    
                        if($countdata>0){
                            if (password_verify($password, $data['password'])){
                           $_SESSION[username] = $data['username'];
                           $_SESSION['login'] = true;
                           header('location: index.php');
                            }
                            else{
                          
                                ?>
                        <div class="alert alert-dismissible fade show alert-danger" role="alert">
                            <strong>Password salah!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                            
                            }

                        }
                        else{
                      
                            ?>
                        <div class="alert alert-dismissible fade show  alert-info" role="alert">
                            <strong>Akun tidak tersedia!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div><?php
                        }




                     }
                     
                     ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js">

    </script>
</body>

</html>