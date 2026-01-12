<<<<<<< HEAD
<?php
include "koneksi.php";

$title   = $_POST['title'];  
$description = $_POST['description'];
$id_category = $_POST['id_category'];
$status   = $_POST['status'];
$id_todo  = $_POST['id_todo'];

$sql = "UPDATE todo SET title='$title', description='$description', id_category='$id_category', status='$status'
        WHERE id_todo = '$id_todo'";
$query = mysqli_query($koneksi, $sql);

if($query){
    echo "Todo berhasil diupdate!";
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}
?>