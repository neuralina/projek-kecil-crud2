<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="proses_tambah.php" method="POST">
    <label>Merk</label>
    <input type="text" name="merk"><br>
    <label>Harga</label>
    <input type="number" name="harga"><br>
    <label>Stok</label>
    <input type="number" name="stok"><br>
    <input type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>