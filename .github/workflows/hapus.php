<?php
include("koneksi.php");
$id = $_GET['id'];
mysqli_query($conn,"delete from upload where id='$id'");
header("location:halaman_prodi.php?halaman=halaman_update");
?>