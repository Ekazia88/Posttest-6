<?php
require '../../koneksi.php';
$id =$_GET['id'];
$result =mysqli_query($conn, "DELETE FROM anime Where id_anime =$id");
if($result){
    echo"<script>
        alert('Data Berhasil Dihapus');
        document.location.href ='anime.php';
        </script>";
  }else{
    echo"<script>
    alert('Data Gagal Dihapus');
    document.location.href ='anime.php';
    </script>";
}
?>