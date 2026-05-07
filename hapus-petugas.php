<?php
if(isset($_GET['id_petugas'])){
 include('koneksi.php');
 $id_petugas=$_GET['id_petugas'];
 $cek=mysqli_query($koneksi,"SELECT id_petugas FROM petugas where id_petugas='$id_petugas'")or die(mysql_error());
 if(mysqli_num_rows($cek)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $del=mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas='$id_petugas'");
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