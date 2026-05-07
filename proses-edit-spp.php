<?php 
if(isset($_POST['kirim'])){
 include('koneksi.php');
 $id_spp=$_POST['id_spp'];
 $tahun=$_POST['tahun'];
 $nominal=$_POST['nominal'];
 
 $update=mysqli_query($koneksi,"UPDATE spp SET id_spp='$id_spp',tahun='$tahun',nominal='$nominal' WHERE id_spp='$id_spp'")or die(mysql_error());
 

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