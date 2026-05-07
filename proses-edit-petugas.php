<?php 
if(isset($_POST['kirim'])){
 include('koneksi.php');
 $id_petugas=$_POST['id_petugas'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $nama_petugas=$_POST['nama_petugas'];
 $level=$_POST['level'];
 
 $update=mysqli_query($koneksi,"UPDATE petugas SET id_petugas='$id_petugas',username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas='$id_petugas'")or die(mysql_error());
 

 header("location:index.php?page=edit");
//   if($update){
//    echo'Data berhasil disimpan! ';
//    echo'<a href="index.php?id_spp='.$id_spp.'">Kembali</a>';
//   }else{
//   echo'Gagal menyimpan data! ';
//   echo'<a href="index.php?id_spp='.$id_spp.'">Kembali</a>';
//   }
}
//   else{
//   echo'<script>window.history.back()</script>';
// }
?>