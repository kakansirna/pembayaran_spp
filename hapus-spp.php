<?php
if(isset($_GET['id_spp'])){
 include('koneksi.php');
 $id_spp=$_GET['id_spp'];
 $cek=mysqli_query($koneksi,"SELECT id_spp FROM spp where id_Spp='$id_spp'")or die(mysql_error());
 if(mysqli_num_rows($cek)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $del=mysqli_query($koneksi,"DELETE FROM spp WHERE id_spp='$id_spp'");
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