<?php
require "../config.php";

$buku = mysqli_query($connect, "SELECT  penerbit.nama, buku.* FROM buku INNER JOIN penerbit ON buku.penerbit_id = penerbit.id");  

?>

<?php
// // require_once "config.php";
// if (isset($_GET['cari'])) {
//   $search = $_GET['cari'];
//   $cari = "SELECT penerbit.nama,  buku.* FROM buku
//   INNER JOIN penerbit ON buku.penerbit_id = penerbit.id
//   WHERE nama_buku LIKE '%$search%'";
//                     
//                    

//   $buku = mysqli_query($connect, $cari);

//   if (mysqli_num_rows($buku) == 0) {
//     $error == true;
//   }
// } else {
//   $buku = mysqli_query($connect, "SELECT penerbit.nama, buku.* FROM buku
                                    
//  INNER JOIN penerbit ON buku.penerbit_id = penerbit.id
//  -- WHERE kondisi = 'baru' AND kategori = 'elektronik'
//  ");
//                                     
//                                     
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/03b0c5c9d8.js"></script>
    <title>Buku | Unibookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
     <?php
     include '../navbar.php';
     ?>
        <div class="container-fluid px-5">
            <div class="row mt-5">
                <div class="col-12">
                <h3>Data Buku
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
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">stok</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">

                                    <?php
                                    $no = 1;    
                                    foreach ($buku as $data) {
                                    ?>

                                    <tr>

                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $data["id"] ?></td>
                                        <td><?= $data["kode"] ?></td>
                                        <td><?= $data["kategori"] ?></td>
                                        <td><?= $data["nama_buku"] ?></td>
                                        <td><?= $data["harga"] ?></td>
                                        <td><?= $data["stok"] ?></td>
                                        <td><?= $data["nama"] ?></td>
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