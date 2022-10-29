<?php 

session_start();
 
include 'koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['pass'];
 
 
$login = mysqli_query($conn,"SELECT * from user where email='$email' and pass='$password'");
$cek = mysqli_num_rows($login);
 

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		header("location:./admin/index.php");
 
	}else if($data['level']=="user"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		header("location:mainpage.php");
 
	// cek jika user login sebagai pengurus
	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>