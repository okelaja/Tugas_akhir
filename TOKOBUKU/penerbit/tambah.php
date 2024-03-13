<?php
require "../config.php";
$penerbit = mysqli_query($connect, "SELECT * FROM penerbit");

// tangkap kiriman dari user
$kode = htmlspecialchars( $_POST["kode"]);
$nama = htmlspecialchars( $_POST["nama"]);
$alamat = htmlspecialchars( $_POST["alamat"]);
$kota = htmlspecialchars( $_POST["kota"]);
$telepon = htmlspecialchars( $_POST["telepon"]);
$query = "INSERT INTO penerbit (kode,nama,alamat,kota,telepon) VALUES ('$kode','$nama','$alamat','$kota','$telepon')";

// simpan data nya ke database
// 1. tombol simpan di klik
if (isset($_POST["simpan"])) {
    // 2.simpan data inputan user kedalam database
    mysqli_query($connect, $query);
    // 3.redirect halaman ke index.php
    header('location: index.php');
    
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Penerbit | Unibookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
     <?php
     include '../navbar.php';
     ?>
        <div class="container-fluid px-5">
            <div class="row mt-5">
                <div class="col-12">
                <h3>Tambah Data Penerbit
                    <a href="index.php">
                        <button type="button" class="btn btn-warning btn-sm float-end"><i class="fa fa-chevron-circle-left pe-1"></i>Kembali</button>
                    </a>
                </h3>
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode</label>
                                            <input type="integer" name="kode" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kode" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Alamat" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kota</label>
                                            <input type="text" name="kota" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kota" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                                            <input type="integer" name="telepon" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Telepon" required>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="simpan" class="btn btn-primary me-1 mb-1">Tambah</button>
                                        <button type="reset" class="btn btn-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
