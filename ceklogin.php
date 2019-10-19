<?php
session_start();
include 'koneksi.php';
$username = $_POST['usernames'];
$password = $_POST['passwords'];
$postlog = mysqli_query($koneksi,"INSERT INTO log_users (usernames) VALUES('$username')");
$data = mysqli_query($koneksi, "SELECT * FROM tabel_users WHERE usernames='$username' and passwords='$password' ");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['usernames'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
}
else{
    header("location:login.php?pesan=gagal");
}
?>