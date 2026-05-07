<html>
<head>
 <title>pembayaran spp</title>
</head>
<body>
<h2>data siswa</h2>
<p> <a href="tambah-siswa.php">Tambah Data</a></p>
<h3>Edit Data Siswa</h3>
<?php
include('koneksi.php');

$nis=$_GET['nis'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="proses-edit.php" method="post">
<input type="hidden" name="nis" value="<?php echo $nis;?>">
<table cellpadding="3" cellspancing="0">
 <tr>
 
   <td>nis</td>
   <td>:</td>  
   <td><input type="text" name="nis" required></td>
  </tr>
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type="text" name="nama" size="30" required></td>
  </tr>
  <tr>
   <td>id_kelas</td>
   <td>:</td>
   <td><input type="text" name="id_kelas" size="30" required></td>
  </tr>
  <tr>
   <td>alamat</td>
   <td>:</td>
   <td><input type="text-area" name="alamat" size="30" required></td>
  </tr>
<tr>
    <td>no telp</td>
    <td>:</td> 
   <td><input type="text" name="no_telp" size="30" required></td>
  </tr>
<tr>
   <td>id_spp</td>
   <td>:</td>
   <td><input type="text" name="id_spp" size="30" required></td>
  </tr>
  <tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>







  