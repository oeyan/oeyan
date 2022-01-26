<?php
include("koneksi.php");
$id = $_GET['id'];
mysqli_query($conn,"delete from laporan where id='$id'");
header ("refresh:0;halaman_mahasiswa.php?halaman=kumpul_laporan");
?>