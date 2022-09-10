<!DOCTYPE html>
<?php
  include ('../config/config.php');
  $nim = $_GET['nim'];
  $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
  $result = mysqli_query($konek, $query);
  $data = mysqli_fetch_assoc($result);
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
                    <h3>Edit Data Mahasiswa</h3>
                    <p><i>CRUD : Create, Read, Update, Delete</i></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">



            <div class="col-md-6">
                <form action="prosesedit.php" method="post">
                    <input type="hidden" class="form-control" id="nim" name="nim" value="<?= $data['nim']; ?>">
                    <div class="mb-3">
                        <label for="staticEmail" class="col-form-label">Masukkan Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="staticEmail" class="col-form-label">Masukkan Jenis Kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option value="<?=$data['jk'];?>"><?php echo $data['jk'];?>
                            </option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="staticEmail" class="col-form-label">Masukkan Nomor Telepon</label>
                        <input type="text" class="form-control" id="telp" name="telp" value="<?= $data['telp']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="staticEmail" class="col-form-label">Masukkan Alamat</label>
                        <div class="form-floating">
                            <textarea class="form-control col-sm" id="alamat" name="alamat"
                                value="<?=$data['alamat'];?>"><?php echo $data['alamat'];?></textarea>
                        </div>
                    </div>
                    <div class=" mb-3">
                        <button type='submit' class='btn btn-primary me-2'>Edit</button>

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