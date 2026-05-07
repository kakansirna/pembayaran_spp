<?php 
if(isset($_POST['kirim'])){
 include('koneksi.php');
 $id_pembayaran =$_POST['id_pembayaran'];
 $id_petugas =$_POST['id_petugas'];
 $nis =$_POST['nis'];
 $tgl_bayar =$_POST['tgl_bayar'];
 $bulan_bayar =$_POST['bulan_bayar'];
 $tahun_bayar =$_POST['tahun_bayar'];
 $id_spp =$_POST['id_spp'];
 $jumlah_bayar =$_POST['jumlah_bayar'];

 $update=mysqli_query($koneksi,"UPDATE pembayaran SET id_pembayaran='$id_pembayaran',id_petugas='$id_petugas',nis='$nis',tgl_bayar='$tgl_bayar',tgl_bayar='$bulan_bayar',tahun_bayar='$tahun_bayar',id_spp='$id_spp',jumlah_bayar='$jumlah_bayar' WHERE id_pembayaran='$id_pembayaran'")or die(mysql_error());
 

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