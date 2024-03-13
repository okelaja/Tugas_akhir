<?php
require "../config.php";
// $query = "SELECT * FROM penerbit";
$penerbit = mysqli_query($connect, "SELECT * FROM penerbit");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/03b0c5c9d8.js"></script>
    <title>Penerbit | Unibookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
    <?php
     include '../navbar.php';
     ?>
        <div class="container-fluid px-5">
            <div class="row mt-5">
                <div class="col-12">
                <h3>Data Penerbit
                    <a href="tambah.php">
                        <button type="button" class="btn btn-warning btn-sm float-end"><i class="fa fa-plus-circle pe-1"></i>Tambah</button>
                    </a>
                </h3>
                    <div class="card">
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    
                                    <?php
                                    $no = 1;    
                                    foreach ($penerbit as $data) {
                                    ?>

                                    <tr>

                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $data["id"] ?></td>
                                        <td><?= $data["kode"] ?></td>
                                        <td><?= $data["nama"] ?></td>
                                        <td><?= $data["alamat"] ?></td>
                                        <td><?= $data["kota"] ?></td>
                                        <td><?= $data["telepon"] ?></td>
                                        <td>
                                            <a href="show.php?id=<?=$data['id'] ?>" style="text-decoration: none;">
                                                <button type="button" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></button>
                                            </a>
                                            <a href="edit.php?id=<?=$data['id'] ?>" style="text-decoration: none;">
                                                <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                                            </a>

                                            <a href="hapus.php?id=<?=$data['id'] ?>" onclick="return confirm('Apakah anda yakin data ini akan dihapus ?')" style="text-decoration: none;">
                                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>