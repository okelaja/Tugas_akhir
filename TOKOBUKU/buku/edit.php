<?php
require "../config.php";
$id = $_GET["id"];

// $buku = mysqli_query($connect, "SELECT penerbit.nama, buku.* 
// FROM buku 
// INNER JOIN penerbit ON buku.penerbit_id = penerbit.id 
// WHERE buku.id = $id");
$buku = mysqli_query($connect, "SELECT * FROM buku WHERE id = '$id'");  
$penerbit = mysqli_query($connect, "SELECT * FROM penerbit");
if (isset($_POST["simpan"])) {

    $kode = htmlspecialchars( $_POST["kode"]);
    $kategori = htmlspecialchars( $_POST["kategori"]);
    $nama = htmlspecialchars( $_POST["nama"]);
    $harga = htmlspecialchars( $_POST["harga"]);
    $stok = htmlspecialchars( $_POST["stok"]);
    $penerbit = htmlspecialchars( $_POST["penerbit"]);
    $query = "UPDATE buku set kode = '$kode', kategori = '$kategori', nama_buku = '$nama', harga = '$harga', stok = '$stok', penerbit_id = '$penerbit' WHERE id = '$id'";
    mysqli_query($connect, $query);
    header("location:index.php");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Buku | Unibookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
     <?php
     include '../navbar.php';
     ?>
        <div class="container-fluid px-5">
            <div class="row mt-5">
                <div class="col-12">
                <h3>Edit Data Buku
                    <a href="index.php">
                        <button type="button" class="btn btn-warning btn-sm float-end"><i class="fa fa-chevron-circle-left pe-1"></i>Kembali</button>
                    </a>
                </h3>
                <div class="card">
                        <div class="card-body">
                        <?php
                            foreach ($buku as $data) {
                        ?>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kode</label>
                                            <input type="integer" name="kode" class="form-control" value="<?= $data["kode"] ?>" id="exampleFormControlInput1" placeholder="Masukkan Kode" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                            <input type="text" name="kategori" class="form-control" value="<?= $data["kategori"] ?>" id="exampleFormControlInput1" placeholder="Masukkan Kategori" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                            <input type="text" name="nama" class="form-control" value="<?= $data["nama_buku"] ?>" id="exampleFormControlInput1" placeholder="Masukkan Nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                            <input type="text" name="harga" class="form-control" value="<?= $data["harga"] ?>" id="exampleFormControlInput1" placeholder="Masukkan Harga" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Stok</label>
                                            <input type="integer" name="stok" class="form-control" value="<?= $data["stok"] ?>" id="exampleFormControlInput1" placeholder="Masukkan Stok" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                                            <select class="form-select" name="penerbit" value="<?= $data["penerbit"] ?>" aria-label="Default select example" required>
                                                <option hidden></option>
                                                <?php
                                                foreach ($penerbit as $terbit) {
                                                ?>
                                                <option value="<?= $terbit["id"] ?>" <?= $terbit["id"] ==  $data["penerbit_id"] ? 'selected' : ""?>><?= $terbit["nama"] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" name="simpan" class="btn btn-primary me-1 mb-1">Update</button>
                                        <button type="reset" class="btn btn-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

