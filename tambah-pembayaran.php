<?php
require 'koneksi.php';

if (isset($_POST['kirim'])){
    $id_pembayaran =$_POST['id_pembayaran'];
    $id_petugas =$_POST['id_petugas'];
    $nis =$_POST['nis'];
    $tgl_bayar =$_POST['tgl_bayar'];
    $bulan_bayar =$_POST['bulan_bayar'];
    $tahun_bayar =$_POST['tahun_bayar'];
    $id_spp =$_POST['id_spp'];
    $jumlah_bayar =$_POST['jumlah_bayar'];

$sql ="INSERT INTO pembayaran (id_pembayaran,id_petugas,nis,tgl_bayar,bulan_bayar,tahun_bayar,id_spp,jumlah_bayar)VALUES('$id_pembayaran','$id_petugas','$nis','$tgl_bayar','$bulan_bayar','$tahun_bayar','$id_spp','$jumlah_bayar')";
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
   <td>id_pembayaran</td>
   <td>:</td>  
   <td><input type="text" name="id_pembayaran" required></td>
  </tr>
<tr>
   <td>id petugas</td>
   <td>:</td>
   <td><input type="text" name="id_petugas" size="30" required></td>
  </tr>
<tr>
   <td>nis</td>
   <td>:</td>
   <td><input type="text" name="nis" size="30" required></td>
  </tr>
<tr>
   <td>tgl_bayar</td>
   <td>:</td>
   <td><input type="date" name="tgl_bayar" size="30" required></td>
  </tr>
<tr>
    <td>bulan_bayar</td>
    <td>:</td> 
   <td><input type="text" name="bulan_bayar" size="30" required></td>
  </tr>
  <tr>
    <td>tahun_bayar</td>
    <td>:</td> 
   <td><input type="text" name="tahun_bayar" size="30" required></td>
  </tr>
<tr>
   <td>id_spp</td>
   <td>:</td>
   <td><input type="text" name="id_spp" size="30" required></td>
  </tr>
  <tr>
    <td>jumlah pembayaran</td>
    <td>:</td>
 <td> <select name="jumlah_bayar" required>
     <option value="">harga</option>
     <option value="1000000">1000000</option>
     <option value="2000000">2000000</option>
     <option value="3000000">3000000</option>
     <option value="4000000">4000000</option>
     <option value="5000000">5000000</option>  
    </select>
    </td>
</tr>
<tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>
