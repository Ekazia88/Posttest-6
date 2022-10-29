<?php
require '../../koneksi.php';
$id =$_GET['id'];
$result =mysqli_query($conn, "DELETE FROM user Where id_user =$id");
if($result){
    echo"<script>
        alert('Data User Berhasil Dihapus');
        document.location.href ='user.php';
        </script>";
  }else{
    echo"<script>
    alert('Data User Gagal Dihapus');
    document.location.href ='user.php';
    </script>";
}
?>