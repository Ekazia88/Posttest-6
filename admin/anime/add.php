<?php
session_start();
if($_SESSION['level']==""){
  header("location:./index.php?pesan=gagal");
}
require '../../koneksi.php';

if(isset($_POST['tambah'])){
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal_rilis'];
  $studio = $_POST['studio'];
  $gambar = $_FILES['img']['name'];
  $target_dir = "../../img/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_dir.$gambar)){
      $sql = "INSERT INTO anime(id_anime, nama_anime, tanggal_rilis, gambar_anime, studio) VALUES ('','$nama','$tanggal','$gambar','$studio')";
      $result = mysqli_query($conn, $sql);
      if($result){
          echo"<script>
                alert('Data User Berhasil Ditambahkan');
                document.location.href ='anime.php';
                </script>";
      }else{
          echo"<script>
          alert('Data User Gagal Ditambahkan');
          document.location.href ='add.php';
          </script>";
      }
    }
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Add</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/crud.css">
  </head>
  <body>
    <div class="sidebar">
      <h2>Admin</h2>
      <ul class="nav">
        <li>
          <a href="./index.php">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="anime.php">
            <span>User Account</span>
          </a>
        </li>
        <li>
          <a href="anime.php">
            <span>Anime</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="container">
              <h1>Tambah Anime</h1>
              <hr>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="nama" required>
              <label for="tanggal_rilis"><b>Tanggal Rilis</b><br></label>
              <input type="datetime-local" placeholder="Enter tanggal" name="tanggal_rilis" id="tgl" required><br>
              <label for="img"><b>Gambar</b><br></label>
              <input type="file" placeholder="Enter Image" name="img" required><br><br>
              <label for="studio"><b>Studio</b></label>
              <input type="text" placeholder="Enter Studio" name="studio" required>
              <hr>
              <button type="submit" class="addbtn" name="tambah">Tambah Data</button>
            </div>
          </form>          
    </div>
  </body>
</html>