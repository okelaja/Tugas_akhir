<?php
require "../config.php";

$id = $_GET["id"];

$buku = mysqli_query($connect, "SELECT penerbit.nama, buku.* 
FROM buku 
INNER JOIN penerbit ON buku.penerbit_id = penerbit.id 
WHERE buku.id = $id");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Data Buku | Unibookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
     <?php
     include '../navbar.php';
     ?>
        <div class="container-fluid px-5">
            <div class="row mt-5">
                <div class="col-6">
                <h3>Show Data Buku
                    <a href="index.php">
                        <button type="button" class="btn btn-warning btn-sm float-end"><i class="fa fa-arrow-left pe-1"></i>Kembali</button>
                    </a>
                </h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <p>ID</p>
                                    <p>Kode</p>
                                    <p>Kategori</p>
                                    <p>Nama</p>
                                    <p>Harga</p>
                                    <p>Stok</p>
                                    <p>Penerbit</p>
                                </div>
                                <div class="col-2">
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                    <p>:</p>
                                </div>
                                <div class="col-8">
                                <?php
                               
                                    $no = 1;    
                                    foreach ($buku as $data) {
                                    ?>

                                    <tr>

                                        <p><?= $data["id"] ?></p>
                                        <p><?= $data["kode"] ?></p>
                                        <p><?= $data["kategori"] ?></p>
                                        <p><?= $data["nama_buku"] ?></p>
                                        <p><?= $data["harga"] ?></p>
                                        <p><?= $data["stok"] ?></p>
                                        <p><?= $data["nama"] ?></p>
                                    </tr>

                                    <?php
                                    }
                                    ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>