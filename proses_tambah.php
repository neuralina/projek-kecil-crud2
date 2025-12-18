<?php
include "koneksi.php";

$merk = $_POST['merk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "INSERT INTO mobil (merk, harga, stok) VALUES ('$merk','$harga','$stok')";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header ("location:index.php?simpan=sukses");
}else {
    header ("location:index.php?simpan=gagal");
}


?>