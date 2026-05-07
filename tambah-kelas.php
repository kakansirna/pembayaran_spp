<?php
require 'koneksi.php';

if (isset($_POST['kirim'])){
    $id_kelas =$_POST['id_kelas'];
    $nama_kelas =$_POST['nama_kelas'];
    $kompetensi_keahlian =$_POST['kompetensi_keahlian'];

$sql ="INSERT INTO kelas (id_kelas,nama_kelas,kompetensi_keahlian)VALUES('$id_kelas','$nama_kelas','$kompetensi_keahlian')";
$query=mysqli_query($koneksi,$sql);

if($query){
    echo 'berhasil';

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
<h3>Tambah Data kelas</h3>
<form action="" method="post">
 <table cellpadding="3" cellspacing="0">
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
   <td>kompetensi keahlian</td>
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
