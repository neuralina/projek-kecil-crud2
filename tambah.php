<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
</head>
<body>
    <div class="navbar">
        <a href="index.php">TODO</a>
        <div>
            <a href="profil.php">Profil</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <form action="proses_tambah.php" method ="post">
            <label for="">Judul</label><br>
            <input type="text" name="title" required><br><br>

            <label for="">Deskripsi</label><br>
            <textarea name="description" id="" cols="30" required></textarea><br>

            <label for="">Kategori</label>
            <select name="id_category" required>
                <option value="">Pili Kategori</option>
                <?php while ($c = mysqli_fetch_assoc($category)) { ?>
                <option value="<?=$c['ic_category'];?>">
                    <?=$c['category'];?>
                </option>
            <?php } ?>
            </select><br><br>

            <label for="">Status</label><br>
            <select name="status" required>
                <option value="pending">Pending</option>
                <option value="done">Done</option>
            </select><br><br>
            <input type="hidden" name="id_user" value="1">
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>