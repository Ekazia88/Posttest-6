<?php
session_start();
if($_SESSION['level']==""){
  header("location:./index.php?pesan=gagal");
}
require '../../koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM anime WHERE id_anime = $id");
$ani =[];

while($row = mysqli_fetch_assoc($result)){
  $ani[] = $row;
}

$ani = $ani[0];
if(isset($_POST['ubah'])){

  $eid = $_POST['id'];
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal_rilis'];
  $studio = $_POST['studio'];
  $gambar = $_FILES['img']['name'];
  $target_dir = "../../img/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr)){
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_dir.$gambar)){
      $sql = "UPDATE anime set nama_anime ='$nama', tanggal_rilis= '$tanggal', gambar_anime= '$gambar',studio= '$studio' where id_anime = $eid";
      $result = mysqli_query($conn,$sql);
      if($result){
        echo"<script>
            alert('Data anime Berhasil Diubah');
            document.location.href ='anime.php';
            </script>";
      }else{
        echo"<script>
        alert('Data anime Gagal Diubah');
        document.location.href ='anime.php';
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
          <a href="anime.php">
            <span>Anime</span>
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
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="container">
              <h1>Edit User</h1>
              <hr>
              <input type="hidden" name="id" value="<?php echo $ani['id_anime']?>">
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="nama" value="<?php echo $ani['nama_anime']?>"required>
              <label for="Tanggal Rilis"><b>Tanggal_rilis</b></label>
              <input type="datetime-local" placeholder="Enter tanggal" name="tanggal_rilis" value="<?php echo $ani['tanggal_rilis']?>" required>
              <label for="img"><b>Gambar</b></label>
              <input type="file" placeholder="Enter Gambar" name="img" required>
              <label for="studio"><b>Studio</b></label>
              <input type="text" placeholder="Enter studio" name="studio" value="<?php echo $ani['studio']?>"required>
              <hr>
              <button type="submit" class="addbtn" name="ubah" >Ubah Data</button>
            </div>
          </form>          
    </div>
  </body>
</html>