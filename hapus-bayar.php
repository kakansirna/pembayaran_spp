<?php
if(isset($_GET['id_pembayaran'])){
 include('koneksi.php');
 $id_pembayaran=$_GET['id_pembayaran'];
 $cek=mysqli_query($koneksi,"SELECT id_pembayaran FROM pembayaran where id_pembayaran='$id_pembayaran'")or die(mysql_error());
 if(mysqli_num_rows($cek)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $del=mysqli_query($koneksi,"DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
  if($del){
   echo'Data siswa berhasil dihapus! ';
   echo'<a href="index.php">Kembali</a>';
  }else{
   echo'Gagal menghapus data! ';
   echo'<a href="index.php">Kembali</a>';
  }
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>