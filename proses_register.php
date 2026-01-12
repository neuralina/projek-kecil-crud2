<?php
include "koneksi.php";

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$birth_date = $_POST['birth_date'];

$password_hash = password_hash($password, PASSWORD_DEFAULT);
$query = mysqli_query($koneksi, "INSERT INTO user (name,username,password_hash,email,birth_date)
         VALUES ('$name','$usernmae','$password_hash','$email','$birth_date')");

if(query) {
    header("location:login.php?=yes");
}else{
    header("location:register.php?=no");
}
exit();
?>