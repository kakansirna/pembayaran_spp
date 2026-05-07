<html>
<head>
 <title>pembayaran spp</title>
</head>
<body>
<h2>data siswa</h2>
<p> <a href="tambah-pembayaran.php">Tambah Data</a></p>
<h3>Edit Data Siswa</h3>
<?php
include('koneksi.php');

$id_pembayaran=$_GET['id_pembayaran'];
$show=mysqli_query($koneksi,"SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="proses-edit-bayar.php" method="post">
<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran;?>">
<table cellpadding="3" cellspancing="0">
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
