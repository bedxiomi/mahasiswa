<!DOCTYPE html>
<?php
include ("config/config.php");
?>
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
        <div class="container mb-3 pt-3">
            <div class="col">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h3>Data Mahasiswa</h3>
                        <p><i>CRUD : Create, Read, Update, Delete</i></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">

                        <div class="mb-3">
                            <a href="kelola/tambah.php" type="button" class="btn btn-primary">Tambah</a>
                            <div class="container-fluid mx-auto">
                                <form class="d-flex ">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>


                            <table class="table table-hover table-bordered border-primary mt-3">
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

                                                <a href="kelola/edit.php?nim=<?php echo $data['nim']; ?>"
                                                    class="btn btn-warning me-3 mb-2">Edit</a>
                                                <form class="d-inline" action="kelola/hapus.php" method="post">
                                                    <input type="hidden" name="nim" value="<?= $data['nim']; ?>">
                                                    <button class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </div>
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
            </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>