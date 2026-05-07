
<html>
<head>
 <title>pembayaran spp</title>
</head>
<body>
<h2>data kelas</h2>
<p> <a href="tambah-kelas.php">Tambah Data</a></p>
<h3>Edit kelas</h3>
<?php
include('koneksi.php');

$id_kelas=$_GET['id_kelas'];
$show=mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas='$id_kelas'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="proses-edit-kelas.php" method="post">
<input type="hidden" name="id_kelas" value="<?php echo $id_kelas;?>">
<table cellpadding="3" cellspancing="0">
<tr>
   <td>id kelas</td>
   <td>:</td>  
   <td><input type="text" name="id_kelas" required></td>
  </tr>
  <tr>
   <td>nama kelas</td>
   <td>:</td>
   <td><input type="text" name="nama_kelas" size="30" required></td>
  </tr>
  <tr>
   <td>kompetensi_keahlian</td>
   <td>:</td>
   <td><input type="text" name="kompetensi_keahlian" size="30" required></td>
  </tr>
  <tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>






  