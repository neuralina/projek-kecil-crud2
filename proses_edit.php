<?php
include "koneksi.php";

$id = $_POST['id'];
$merk = $_POST['merk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE mobil SET merk = '$merk', harga= '$harga', stok= '$stok' WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

if ($query){
   header("location:index.php?edit=sukses");
}else{
    header("location:index.php?edit=gagal");
}

?>

<?php
include "koneksi.php";

$id_transaksi   = $_GET['id_transaksi'];  
$id_parfum      = $_GET['id_parfum'];
$id_sayur       = $_GET['id_sayur'];
$id_pelanggan   = $_GET['id_pelanggan'];
$tanggal        = $_GET['tanggal_transaksi'];

$sql = "UPDATE transaksi SET 
            id_parfum = '$id_parfum',
            id_sayur = '$id_sayur',
            id_pelanggan = '$id_pelanggan',
            tanggal_transaksi = NOW()'$tanggal'
        WHERE id_transaksi = '$id_transaksi'";

$update = mysqli_query($koneksi, $sql);

if($update){
    echo "Data transaksi berhasil diupdate!";
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}
