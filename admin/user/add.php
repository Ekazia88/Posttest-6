<?php
session_start();
if($_SESSION['level']==""){
  header("location:./index.php?pesan=gagal");
}
require '../../koneksi.php';

if(isset($_POST['tambah'])){
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $email = $_POST['email'];
  $sql = "INSERT INTO user (id_user, nama, username, pass,email,level) 
          VALUES ( '','$nama','$username','$password','$email','user')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo"<script>
        alert('Data User Berhasil Ditambahkan');
        document.location.href ='user.php';
        </script>";
  }else{
    echo"<script>
    alert('Data User Gagal Ditambahkan');
    document.location.href ='add.php';
    </script>";
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
          <a href="user.php">
            <span>User Account</span>
          </a>
        </li>
        <li>
          <a href="./anime/anime.php">
            <span>Anime</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main">
        <form action="" method="POST">
            <div class="container">
              <h1>Tambah User</h1>
              <hr>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="nama" required>
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" required>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" required>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
              <hr>
              <button type="submit" class="addbtn" name="tambah">Tambah Data</button>
            </div>
          </form>          
    </div>
  </body>
</html>