<?php
require ("session.php");
include ("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />


    <title>CRUD MHS</title>
</head>

<body>
    <section id="data-mhs">

        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Data Mahasiswa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#data-mhs">Home</a>
                        </li>
                    </ul>

                    <a href="logout.php" type="button" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </nav>


        <div class="container mt-3">
            <div class="row">
                <div class="col text-end">
                    <h5>hallo! <?php echo $_SESSION['username'] ?></h3>
                </div>
            </div>
        </div>





        <div class="container">

            <div class="row text-center bg-warning">
                <div class="col">
                    <h3>Data Mahasiswa</h3>
                    <p><i>CRUD : Create, Read, Update, Delete</i></p>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="row justify-content-center bg-danger">

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="kelola/prosestambah.php" method="post">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Masukkan
                                                NIM</label>
                                            <input type="text" class="form-control" id="nim" name="nim">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Masukkan
                                                Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" ">
                                                </div>
                                                <div class=" mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Masukkan
                                                Jenis Kelamin</label>
                                            <select class="form-control" id="jk" name="jk">

                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Masukkan
                                                No.Telp</label>
                                            <input type="text" class="form-control" id="telp" name="telp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Masukkan
                                                Alamat</label>
                                            <div class="form-floating">

                                                <textarea class="form-control col-sm" id="alamat"
                                                    name="alamat"></textarea>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type='submit' class='btn btn-primary me-2'>Tambah</button>

                                </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="table-responsive">
                    <table class="table  table-sm table-hover table-bordered border-primary mt-3">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Telp</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                    $query="SELECT * FROM mahasiswa";
                                    $sql = mysqli_query($konek, $query);
                                    $no = 1;
                                    while($data = mysqli_fetch_array($sql)){
                                      ?>
                            <tr>
                                <th scope="row"><?php echo $no; ?></th>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['jk']; ?></td>
                                <td><?php echo $data['telp']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <div class="justify-content-center">

                                    <td>
                                        <a type="button" class="btn btn-warning me-1 mb-1" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit<?= $data['nim']; ?>">
                                            Edit
                                        </a>
                                        <div class="modal fade" id="modalEdit<?= $data['nim']; ?>" tabindex="-1"
                                            aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Edit
                                                            Data
                                                            Mahasiswa
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="kelola/prosesedit.php" method="post">
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Masukkan
                                                                    Nama</label>
                                                                <input type="text" class="form-control" id="nama"
                                                                    name="nama" value="<?php echo $data['nama'] ?>">
                                                            </div>

                                                            <div class=" mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Masukkan
                                                                    Jenis Kelamin</label>
                                                                <select class="form-control" id="jk" name="jk">
                                                                    <option value="<?php echo $data['jk'] ?>">
                                                                        <?php echo $data['jk'] ?></option>
                                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Masukkan
                                                                    No.Telp</label>
                                                                <input type="text" class="form-control" id="telp"
                                                                    name="telp" value="<?php echo $data['telp'] ?>">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Masukkan
                                                                    Alamat</label>
                                                                <div class="form-floating">

                                                                    <textarea class="form-control col-sm" id="alamat"
                                                                        name="alamat"
                                                                        value=""><?php echo $data['alamat'] ?></textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Tutup</button>
                                                        <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
                                                        <button type='submit' class='btn btn-warning me-2'>Edit
                                                            Data</button>

                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <a type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalHapus<?= $data['nim']; ?>">
                                    Hapus
                                </a>
                                <div class="modal fade" id="modalHapus<?= $data['nim']; ?>" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Data
                                                    Mahasiswa
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda
                                                Ingin Menghapus Data berikut?
                                                <br>
                                                Nama : <?= $data['nama']; ?>.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <form class="d-inline" action="kelola/hapus.php" method="post">
                                                    <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>

                            <?php
                                                $no++;
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->



    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script> -->
    <script src="js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>