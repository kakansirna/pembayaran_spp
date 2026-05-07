<?php
require 'koneksi.php';

if (isset($_POST['kirim'])){
    $id_spp =$_POST['id_spp'];
    $tahun =$_POST['tahun'];
    $nominal =$_POST['nominal'];

$sql ="INSERT INTO spp (id_spp,tahun,nominal)VALUES('$id_spp','$tahun','$nominal')";
$query=mysqli_query($koneksi,$sql);

if($query){
    echo 'berasil';

    header('location:index.php');
}
    
}
?>

<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
<p> <a href="index.php">Tambah Data</a></p>
<h3>Tambah Data Siswa</h3>
<form action="" method="post">
 <table cellpadding="3" cellspacing="0">
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
