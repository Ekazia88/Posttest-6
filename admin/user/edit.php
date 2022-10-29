<?php
session_start();
if($_SESSION['level']==""){
  header("location:./index.php?pesan=gagal");
}
require '../../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM user WHERE id_user = $id");
$usr =[];

while($row = mysqli_fetch_assoc($result)){
  $usr[] = $row;
}

$usr = $usr[0];

if(isset($_POST['ubah'])){
  $id =$_POST['id'];
  $nama = $_POST['name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  $sql = "UPDATE user set nama ='$nama', username='$username', pass ='$password',email = '$email' where id_user = $id";
  $result = mysqli_query($conn,$sql);

  if($result){
    echo"<script>
        alert('Data User Berhasil Diubah');
        document.location.href ='user.php';
        </script>";
  }else{
    echo"<script>
    alert('Data User Gagal Diubah');
    document.location.href ='edit.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Edit</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/crud.css"/>
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
            <a href="./logout.php">
              <span>Log Out</span>
            </a>
        </li>
      </ul>
    </div>
    <div class="main">
        <form action="" method="POST">
            <div class="container">
              <h1>Edit User</h1>
              <hr>
              <input type="hidden" name="id" value="<?php echo $usr['id_user']?>">
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" value="<?php echo $usr['nama']?>"required>
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="username" value="<?php echo $usr['username']?>" required>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" value="<?php echo $usr['pass']?>"required>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" value="<?php echo $usr['email']?>"required>
              <hr>
              <button type="submit" class="addbtn" name="ubah" >Ubah Data</button>
            </div>
          </form>          
    </div>
  </body>
</html>