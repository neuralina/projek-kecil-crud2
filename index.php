<?php
include "koneksi.php";
$sql = "SELECT * FROM mobil";
$query = mysqli_query($koneksi,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mobil</title>
</head>
<body>
    <h1>Data Mobil</h1>
    <a href="tambah.php"><button>Tambah</button></a><br><br>

    <table border = '1'>
        <tr>
            <th>id</th>
            <th>merk</th>
            <th>harga</th>
            <th>stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        while($mobil = mysqli_fetch_assoc($query)){
        echo "<tr>";
        echo "<td>" . $mobil ['id'] . "</td>";
        echo "<td>" . $mobil ['merk'] . "</td>";
        echo "<td>" . $mobil ['harga'] . "</td>";
        echo "<td>" . $mobil ['stok'] . "</td>";
        echo "<td>";
           echo "<a href='edit.php?id=". $mobil['id'] . "'>Edit</a>";
           echo " | ";
           echo "<a href='hapus.php?id=". $mobil['id'] ."'>Hapus</a>";
        echo "</td>";
        echo "</tr>";
        }
        ?>
    </table>
</body>
</html>