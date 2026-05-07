
<html>
<head>
 <title>pembayaran spp</title>
</head>
<body>
<h2>data spp</h2>
<p> <a href="tambah-spp.php">Tambah Data</a></p>
<h3>Edit spp</h3>
<?php
include('koneksi.php');

$id_spp=$_GET['id_spp'];
$show=mysqli_query($koneksi,"SELECT * FROM spp WHERE id_spp='$id_spp'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="proses-edit-spp.php" method="post">
<input type="hidden" name="id_spp" value="<?php echo $id_spp;?>">
<table cellpadding="3" cellspancing="0">
<tr>
   <td>id spp</td>
   <td>:</td>  
   <td><input type="text" name="id_spp" required></td>
  </tr>
  <tr>
   <td>tahun</td>
   <td>:</td>
   <td><input type="text" name="tahun" size="30" required></td>
  </tr>
  <tr>
   <td>nominal</td>
   <td>:</td>
   <td><input type="text" name="nominal" size="30" required></td>
  </tr>
  <tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>






  