<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
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
        <form action="proses_edit.php" method ="post">
            <input type="hidden" name="id_todo" value="<?=$todo['id_todo'];?>">
            <label for="">Judul</label><br>
            <input type="text" name="title" required value="<?=$todo['title'];?>"><br><br>

            <label for="">Deskripsi</label><br>
            <textarea name="description" id="" cols="30" required><?=$todo['description'];?></textarea><br>

            <label for="">Kategori</label>
            <select name="id_category" required>
                <option value="">Pili Kategori</option>
                <?php while ($c = mysqli_fetch_assoc($category)) { ?>
                <option value="<?=$c['id_category'];?>"
                    <?= ($todo['id_category'] == $c['id_category']) ? 'selected' : ''?>>
                    <?=$c['category'];?>
                </option>
            <?php } ?>
            </select><br><br>

            <label for="">Status</label><br>
            <select name="status" required>
                <option value="pending" <?=$todo($status == 'pending') ? 'selected' : '' ?>>Pending</option>
                <option value="done" <?=$todo($status == 'done') ? 'selected' : '' ?>>Done</option>
            </select><br><br>
            <button type="submit">Edit</button>
        </form>
    </div>
</body>
</html>