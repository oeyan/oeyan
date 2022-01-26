<content>
<?php
    session_start();
    include 'koneksi.php';
?>
<center><h2>Laporan Proyek 1</h1></center>

<center>
<table border = "1">
    <tr>
        
        <th> No </th>
        <th> Mahasiswa 1 </th>
        <th> Mahasiswa 2 </th>
        <th> Pembimbing </th>
        <th> Keterangan </th>
        <th> File </th>
        <th> Waktu Pengiriman</th>
        <th>Aksi</th>
    </tr>
    <?php
        include("koneksi.php");
        $i =1;
        $q = mysqli_query($conn, "SELECT * FROM laporan WHERE mahasiswa1='$_SESSION[nama_user]'");
        while($f = mysqli_fetch_array($q))
        {
    ?>
    <tr>
        <td><center><?php echo $i; ?></center></td>
        <td><center><?php echo $f['mahasiswa1']; ?></center></td>
        <td><center><?php echo $f['mahasiswa2']; ?></center></td>
        <td><center><?php echo $f['dosen_pembimbing']; ?></center></td>
        <td><center><?php echo $f['keterangan']; ?></center></td>
        <td><center><a href="download_laporan.php?file=<?php echo $f['nama_file'];?>">File</a></center></td>
        <td><center><?php echo $f['waktu_pengiriman']; ?></center></td>
        <td><a href="hapus_laporan.php?id=<?php echo $f['id']; ?>">Hapus</a></td>
    <?php
    $i++;
    }
    ?>
</table>
<br>
<form action="form_laporan.php" method="post">
<button type="submit" name="tambah">Tambah</button>
</form>
</center>
</body>
</html>
</content>