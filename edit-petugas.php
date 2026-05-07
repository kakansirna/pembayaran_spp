
<html>
<head>
 <title>pembayaran spp</title>
</head>
<body>
<h2>data kelas</h2>
<p> <a href="tambah-petugas.php">Tambah Data</a></p>
<h3>Edit kelas</h3>
<?php
include('koneksi.php');

$id_petugas=$_GET['id_petugas'];
$show=mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="proses-edit-petugas.php" method="post">
<input type="hidden" name="id_petugas" value="<?php echo $id_petugas;?>">
<table cellpadding="3" cellspancing="0">
<tr>
   <td>id petugas</td>
   <td>:</td>  
   <td><input type="text" name="id_petugas" required></td>
  </tr>
  <tr>
   <td>username</td>
   <td>:</td>
   <td><input type="text" name="username" size="30" required></td>
  </tr>
  <tr>
   <td>password</td>
   <td>:</td>
   <td><input type="text" name="password" size="30" required></td>
  </tr>
  <tr>
  <tr>
   <td>nama_petugas</td>
   <td>:</td>
   <td><input type="text" name="nama_petugas" size="30" required></td>
  </tr>
  <tr>
   <td>level</td>
   <td>:</td>
   <td><input type="text" name="level" size="30" required></td>
  </tr>
  <tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>






  