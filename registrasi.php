<?php
    include_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>
    <form style="width:50%;" action="" method="post">
      <h1>Form Registrasi</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="username"><strong>Username</strong></label>
        <input type="text" placeholder="Buat username kamu" name="usernames" required>
        <label for="asal_"><strong>Password</strong></label>
        <input type="text" placeholder="Buat Password kamu" name="passwords" required>
        <label for="nama_pendaftar"><strong>Nama Pendaftar</strong></label>
        <input type="text" placeholder="Masukkan nama pendaftar" name="nama_pendaftar" required>
        <label for="tempat_lahir"><strong>Tempat Lahir</strong></label>
        <input type="text" placeholder="Masukkan tempat lahir" name="tempat_lahir" required>
        <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label><br><br>
        <input type="date"  name="tanggal_lahir" required><br><br>
        <label for="alamat"><strong>Alamat</strong></label>
        <input type="text" placeholder="Masukkan Alamat" name="alamat" required>
        <label for="alamat_kecamatan"><strong>Alamat Kecamatan</strong></label>
        <input type="text" placeholder="Masukkan alamat kecamatan" name="alamat_kecamatan" required>
        <label for="alamat_kabupaten"><strong>Alamat Kabupaten</strong></label>
        <input type="text" placeholder="Masukkan alamat kabupaten" name="alamat_kabupaten" required>
        <label for="alamat_provinsi"><strong>Alamat Provinsi</strong></label>
        <input type="text" placeholder="Masukkan alamat provinsi" name="alamat_provinsi" required>
        <label for="kode_pos"><strong>Kode Pos</strong></label>
        <input type="text" placeholder="Masukkan kode pos" name="kode_pos" required>
        <label for="asal_sekolah"><strong>Asal Sekolah</strong></label>
        <input type="text" placeholder="Masukkan asal sekolah" name="asal_sekolah" required>
        
      </div>
      <button type="submit" name="btnkirim">Registrasi</button>
      <center>
      sudah punya akun?  <a href="login.php">login</a>
      </center>
    </form>
  </body>
</html>
<?php
  
    $koneksi = mysqli_connect("localhost","kevin","123","database_ppdb");
    include_once("koneksi.php");
   if(isset($_POST['btnkirim'])) {
      $nama_pendaftar = $_POST['nama_pendaftar'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir=$_POST['tanggal_lahir'];
      $alamat = $_POST['alamat'];
      $alamat_kecamatan = $_POST['alamat_kecamatan'];
      $alamat_kabupaten = $_POST['alamat_kabupaten'];
      $alamat_provinsi = $_POST['alamat_provinsi'];
      $kode_pos = $_POST['kode_pos'];
      $asal_sekolah = $_POST['asal_sekolah'];
      $passwords = $_POST['passwords'];
      $usernames = $_POST['usernames'];

      mysqli_query($koneksi,"INSERT INTO tabel_users (nama_lengkap,usernames,passwords,birthdate) VALUES('$nama_pendaftar','$usernames','$passwords','$tanggal_lahir')");
      mysqli_query($koneksi,"INSERT INTO tabel_pendaftaran (nama_pendaftar,tempat_lahir,tanggal_lahir,alamat,alamat_kecamatan,alamat_kabupaten,alamat_provinsi,kode_pos,asal_sekolah) VALUES('$nama_pendaftar','$tempat_lahir','$tanggal_lahir','$alamat','$alamat_kecamatan','$alamat_kabupaten','$alamat_provinsi','$kode_pos','$asal_sekolah')");
      header("location:login.php");
     
   }
?> 
