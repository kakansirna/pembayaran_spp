<?php
if(isset($_GET['id_kelas'])){
 include('koneksi.php');
 $id_kelas=$_GET['id_kelas'];
 $cek=mysqli_query($koneksi,"SELECT id_kelas FROM kelas where id_kelas='$id_kelas'")or die(mysql_error());
 if(mysqli_num_rows($cek)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $del=mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas='$id_kelas'");
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