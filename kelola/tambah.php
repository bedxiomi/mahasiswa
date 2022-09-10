<!DOCTYPE html>
<?php
  include ('../config/config.php');
?>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- css ku -->
    <link rel="stylesheet" href="../css/style.css">

    <title>Data Mahasiswa</title>
</head>

<body>
    <section id="data-mhs">
        <div class="container mb-3 pt-3">
            <div class="row text-center mb-3">
                <div class="col">
                    <h3>Tambah Data Mahasiswa</h3>
                    <p><i>CRUD : Create, Read, Update, Delete</i></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">



            <div class="col-md-6">
                <form action="prosestambah.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nim" name="nim"
                            placeholder="Masukkan NIM Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <select class="form-control" id="jk" name="jk" placeholder="Masukkan Jenis Kelamin">
                            <option selected>--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan No.Telp">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                    </div>
                    <div class="mb-3">
                        <button type='submit' class='btn btn-primary me-2'>Tambah</button>
                        <button type='reset' class='btn btn-secondary'>Bersih</button>
                    </div>
            </div>

            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>