<?php 
	session_start();
	if($_SESSION['level']== ""){
		header("location:./index.php?pesan=gagal");
	}
 
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Dashboard</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="sidebar">
      <h2>Admin</h2>
      <ul class="nav">
        <li>
          <a href="#">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="./user/user.php">
            <span>User Account</span>
          </a>
        </li>
        <li>
          <a href="./anime/anime.php">
            <span>Anime</span>
          </a>
        </li>
        <li>
            <a href="logout.php">
              <span>Log Out</span>
            </a>
          </li>
      </ul>
    </div>
    <div class="main">
        <h1> Selamat Datang Di Admin</h1>
    </div>
  </body>
</html>