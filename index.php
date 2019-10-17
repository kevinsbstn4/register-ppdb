<?php
    include_once("koneksi.php");
   if(isset($_POST['btndaftar'])) {
       $namapendaftar = mysqli_real_escape_string($koneksi, trim($_POST['nama_pendaftar']));
       $tempatlahir = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));
       $tanggallahir = mysqli_real_escape_string($koneksi, trim($_POST['tanggal_lahir']));
       $alamat = mysqli_real_escape_string($koneksi, trim($_POST['alamat']));
       $alamatkecamatan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kecamatan']));
       $alamatkabupaten = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kabupaten']));
       $alamatprovinsi = mysqli_real_escape_string($koneksi, trim($_POST['alamat_provinsi']));
       $kodepos = mysqli_real_escape_string($koneksi, trim($_POST['kode_pos']));
       $asalsekolah = mysqli_real_escape_string($koneksi, trim($_POST['asal_sekolah']));
       $sqltotal = mysqli_query($connect,"INSERT INTO tabel_nota(nama_pendaftar,tempat_lahir,tanggal_lahir,alamat,alamat_kecamatan,alamat_kabupaten,alamat_provinsi,kode_pos,asal_sekolah) VALUES('$namapendaftar','$tempatlahir','$tanggallahir','$alamat','$alamatkecamatan','$alamatkabupaten','$alamatprovinsi','$kodepos','$asalsekolah')");



   }
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
<body style="background-image:url(''); background-size: cover;">
<center>
<div class="card" style="width: 700px; margin-top: 50px; margin-bottom: 50px; ">
    <form style="background-color: yellow;" action="ceklogin.php" method="post">
    <div style="background-color: black; color: white; " class="card-header">
    <h1>Form Pendaftaran</h1> 
    </div>
    Nama Pendaftar <br>
      <input  type="text" name="nama_pendaftar"  />
        <br /><br>
      Tempat Lahir <br>
      <input  type="text" name="tempat_lahir"  />
        <br /><br>
        Tanggal Lahir <br>
       <input style="margin-top:10px; " type="date" name="tanggal_lahir"  />
        <br /><br>
        Alamat <br>
       <input  type="text" name="alamat" />
        <br /><br>
        Alamat Kecamatan <br>
       <input  type="text" name="alamat_kecamatan"  />
        <br /><br>
        Alamat Kabupaten <br>
       <input  type="text" name="alamat_kabupaten"  />
        <br /><br>
        Alamat Provinsi <br>
       <input  type="text" name="alamat_provinsi"  />
        <br><br>
        Kode Pos <br>
       <input  type="text" name="kode_pos" /><br><br>
        Asal Sekolah <br>
       <input  type="text" name="asal_sekolah"  />
        <br /> <br />
        <button style="margin-bottom: 10px;" type="submit" class="btn btn-dark">Kirim</button>
        <br />
    </form>
    </div>
    </center>
</body>
</html>