<?php
	session_start();
if($_SESSION['level']==""){
  header("location:../index.php?pesan=gagal");
}
require '../../koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM anime");
$anime = [];
while($row = mysqli_fetch_assoc($result)){
  $anime[] =$row;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - User Account</title>
    <link rel="stylesheet" href="../css/style.css" />
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
          <a href="./user/user.php">
            <span>User Account</span>
          </a>
        </li>
        <li>
          <a href="anime.php">
            <span>Anime</span>
          </a>
        </li>
        <li>
            <a href="../logout.php">
              <span>Log Out</span>
            </a>
        </li>
      </ul>
    </div>
    <div class="main">
      <a href="add.php" >
        <span class="add">Tambah data</span>
      </a>
        <table class="table">
            <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Tahun Rilis</th>
            <th>gambar</th>
            <th>studio</th>
            <th>Action</th>
            <tbody>
              <?php $i = 1; foreach($anime as $ani) :?>
            </tr>
            <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $ani["nama_anime"];?></td>
              <td><?php echo $ani["tanggal_rilis"];?></td>
              <td><img src = "../../img/<?php echo $ani["gambar_anime"]; ?>"style = "width:30px;height:30px;"></td>
              <td><?php echo $ani["studio"];?></td>
              <td>
                <a class="edit-button" href="edit.php?id=<?php echo $ani["id_anime"];?>">edit</a>
                <a class ="hapus-button" href="delete.php?id=<?php echo $ani["id_anime"];?>">hapus</a>
              </td>
            </tr>
            <?php $i++; endforeach;?>
            </tbody>
        </table>
    </div>
  </body>
</html>