<?php 
if(isset($_POST['kirim'])){
 include('koneksi.php');
 $id_kelas=$_POST['id_kelas'];
 $nama_kelas=$_POST['nama_kelas'];
 $kompetensi_keahlian=$_POST['kompetensi_keahlian'];
 
 $update=mysqli_query($koneksi,"UPDATE kelas SET id_kelas='$id_kelas',nama_kelas='$nama_kelas',kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas='$id_kelas'")or die(mysql_error());
 

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