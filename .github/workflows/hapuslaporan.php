<?php
include("koneksi.php");
$id = $_GET['id'];
mysqli_query($conn,"delete from lihat where id='$id'");
header ("refresh:0;halaman_dospem.php?halaman=lihat_laporan");
?>