<?php
require 'koneksi.php';
if(isset($_POST['daftar'])){
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['pass'];
  $email = $_POST['email'];
  $sql = "INSERT INTO user (id_user, nama, username, pass,email,level) 
          VALUES ( '','$nama','$username','$password','$email','user')";
  $result = mysqli_query($conn, $sql);
  if($result){
    echo"<script>
        alert('Anda berhasil Daftar');
        document.location.href ='login.php';
        </script>";
  }else{
    echo"<script>
    alert('Username harus benar!!');
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register.css">  
    <title>Register</title>
</head>
<body>
<body>
<div class="container">
  <div class="form">
    <h2 class="main-text">Daftar</h2>
    <form class="register-form" method="post">
      <input type="text" placeholder="nama" name="nama" required>
      <input type="text" placeholder="username" name="username"required>
      <input type="password" placeholder="password"name="pass" required>
      <input type="text" placeholder="email address" name="email" required>
      <button class="btn" type="submit" name="daftar">Sign Up</button>
      <p class="message">punya akun ? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>