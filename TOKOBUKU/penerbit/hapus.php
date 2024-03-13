<?php

require "../config.php";
$id = $_GET["id"];

$query = "DELETE FROM penerbit WHERE id=$id";
$hapus = mysqli_query($connect, $query);

header("location:index.php");

?>