<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./css/login.css">
<title>Animflix - Tonton Anime dimana saja dan kapan saja</title>
</head>
<body>
    <header class="showcase">
        

            <div class="logo">
                <img src="./img/Animflix-Logo.png">
            </div>

            <div class="showcase-content">
                <div class="formm">
                    <form action="cek_login.php" method="post">
                        <h1>Sign In</h1>
                        <div class="info">
                            <input class="email" type="email" placeholder="Email" name="email"> <br>
                            <input class="email" type="password" placeholder="Password" name="pass"> <br>
                            <?php 
	                            if(isset($_GET['pesan'])){
		                            if($_GET['pesan']=="gagal"){
			                            echo "Username dan Password tidak sesuai !";
		                            }
	                            }?>
                        </div>
                        <div class="btn">
                            <button class="btn-primary" type="submit" value="login">Sign In</button>
                        </div>
                    </form>
    
                </div>
                <div class="signup">
                    <p>Belum Punya Akun?</p>
                    <a href="register.php">Daftar Sekarang</a>
                </div>
            </div>
    </header>


</body>
</html>


