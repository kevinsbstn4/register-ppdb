<?php
    include_once("koneksi.php");
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username dan password tidak sesuai!";
        }elseif($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }elseif($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<center>
<div class="card" style="width: 700px; margin-top: 100px;">
<br />
    <form action="ceklogin.php" method="post">
    <h1>Form Pendaftaran</h1> <br />
      Nama Pendaftar :  <input type="text" name="nama_pendaftar" placeholder="nama pendaftar" />
        <br />
      Tempat Lahir :  <input style="margin-top:10px; margin-left: 20px"  type="text" name="tempat_lahir" placeholder="tempat lahir" />
        <br />
       Tanggal Lahir : <input style="margin-top:10px; margin-right: 40px;" type="date" name="tanggal_lahir" placeholder="tanggal lahir" />
        <br />
       Alamat : <input style="margin-top:10px;" type="text" name="alamat" placeholder="alamat" />
        <br />
       Alamat Kecamatan :  <input style="margin-top:10px;" type="text" name="alamat_kecamatan" placeholder="alamat kecamatan" />
        <br />
       Alamat Kabupaten : <input style="margin-top:10px;" type="text" name="alamat_kabupaten" placeholder="alamat kabupaten" />
        <br />
       Alamat Provinsi : <input style="margin-top:10px;" type="text" name="alamat_provinsi" placeholder="alamat provinsi" />
        <br />
       Kode Pos : <input style="margin-top:10px;" type="text" name="kode_pos" placeholder="kode pos" />
        <br />
       Asal Sekolah : <input style="margin-top:10px;" type="text" name="asal_sekolah" placeholder="asal sekolah" />
        <br /> <br />
        <button type="submit" name="btndaftar">Daftar</button>
        <br />
    </form>
    </div>
    </center>
</body>
</html>