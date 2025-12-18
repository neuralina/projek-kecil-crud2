<!-- <?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM mobil WHERE id = '$id' ";
$query = mysqli_query($koneksi, $sql);

while($mobil = mysqli_fetch_assoc($query)) {

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>

    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $mobil['id']; ?>">
    <label>Merk</label>
    <input type="text" name="merk" value="<?= $mobil['merk']; ?>"><br>
    <label>Harga</label>
    <input type="number" name="harga" value="<?=  $mobil['harga']; ?>"><br>
    <label>Stok</label>
    <input type="number" name="stok" value="<?= $mobil['stok']; ?>"><br>
    <input type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>

<?php
}
?> -->



<?php
include "koneksi.php";

$id = $_GET['id_transaksi'];

$sql = "SELECT * FROM transaksi WHERE id_transaksi = '$id'";
$query = mysqli_query($koneksi,$sql);
$transaksi = mysqli_fetch_assoc($query);

$sayuran = "SELECT * FROM sayuran";
$pelanggan = "SELECT * FROM pelanggan";

$querySayuran = mysqli_query($koneksi,$sayuran);
$quryPelanggan = mysqli_query($koneksi,$pelanggan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=h2">
    <title>Document</title>
</head>
<body>
    <h2>Edit Transaksi</h2>
    <form action="proses_edit.php" method="get">
        <label for="">Nama Pelanggan</label>
        <select name="id_pelanggan" id="">
            <option value="<?=$p = mysqli_fetch_"></option>
        </select>

        <label for="">Nama Sayur</label>
        <select name="id_sayur" id="">
            <?php while ($s = mysqli_fetch_assoc($querySayuran)) {?>
                <option value="<?=$s['id_sayur'];?>"
                <?= ($s['id_sayur'] == $transaksi['id_sayur']) ? 'selected' : ''?>>
                <?= $s['nama_sayur'];?>
                </option>
           <?php } ?>
        </select>

    </form>
</body>
</html>