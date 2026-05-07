<?php 
 if(isset($_POST['kirim'])){
     $nis=$_POST['nis'];
     $nama=$_POST['nama'];
     $id_kelas=$_POST['id_kelas'];
     $alamat=$_POST['alamat'];
     $no_telp=$_POST['no_telp'];
     $id_spp=$_POST['id_spp'];
     $update=mysqli_query($koneksi,"UPDATE siswa SET nis='$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' WHERE nis='$nis'")or die(mysql_error());
     include('koneksi.php');
 

header("location:index.php?page=edit");
 //  if($update){
//   echo'Data berhasil disimpan! ';
//   echo'<a href="index.php?nis='.$nis.'">Kembali</a>';
//  }else{
//   echo'Gagal menyimpan data! ';
//   echo'<a href="index.php?nis='.$nis.'">Kembali</a>';
//  }
}
//  else{
//  echo'<script>window.history.back()</script>';
// }
 ?> 