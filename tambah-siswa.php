<?php
require 'koneksi.php';

if (isset($_POST['kirim'])){
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $id_kelas =$_POST['id_kelas'];
    $alamat =$_POST['alamat'];
    $no_hp =$_POST['no_hp'];
    $id_spp =$_POST['id_spp'];

$sql ="INSERT INTO siswa (nis,nama,id_kelas,alamat,no_hp,id_spp)VALUES('$nis','$nama','$id_kelas','$alamat','$no_hp','$id_spp')";
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
<h3>Tambah Data Siswa</h3>
<form action="" method="post">
 <table cellpadding="3" cellspacing="0">
  <tr>
   <td>NIS</td>
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
   <td><input type="text" name="no_hp" size="30" required></td>
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
