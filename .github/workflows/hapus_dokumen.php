<?php
include("koneksi.php");
$id = $_GET['id'];
mysqli_query($conn,"delete from dokumen where id='$id'");
header ("refresh:0;halaman_prodi.php?halaman=halaman_dokumen");
?>