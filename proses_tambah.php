<?php
include "koneksi.php";

$title = $_POST['title'];
$description = $_POST['description'];
$id_category = $_POST['id_category'];
$status = $_POST['status'];
$id_user = "1";

$sql = "INSERT INTO todo (title, description, id_category, status) 
        VALUES ('$title','$description','$id_category','$status')";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header ("location:index.php?simpan=sukses");
}else {
    header ("location:index.php?simpan=gagal");
}


?>