<table border="1" cellspacing="0" width="735"%>
    <tr  style="text-align; font-weight:bold; background-color:#eee; font-family: sans-serif;">
        <p><a href="tampil-pembayaran.php">/<a href ="tambah-pembayaran.php">Tambah Data</a></p>
        <td>No.</td>
        <td>id_pembayaran</td>
        <td>id_petugas </td>
        <td>nis</td>
        <td>tgl-bayar</td>
        <td>bulan_bayar</td>
        <td>tahun_bayar</td>
        <td>id_spp</td>
        <td>jumlah_bayar</td>
        <td>Opsi</td>
    </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM pembayaran ORDER BY id_pembayaran")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo'<td><center>'.$data['id_pembayaran'].'</center></td>';
   echo'<td><center>'.$data['id_petugas'].'</center></td>';
   echo'<td><center>'.$data['nis'].'</center></td>';
   echo'<td><center>'.$data['tgl_bayar'].'</center></td>';
   echo'<td><center>'.$data['bulan_bayar'].'</center></td>';
   echo'<td><center>'.$data['tahun_bayar'].'</center></td>';
   echo'<td><center>'.$data['id_spp'].'</center></td>';
   echo'<td><center>'.$data['jumlah_bayar'].'</center></td>';
   echo'<td><center><a href="edit-pembayaran.php?id_pembayaran='.$data['id_pembayaran'].'">Edit</a> / <a href="hapus-bayar.php?id_pembayaran='.$data['id_pembayaran'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>

    

</table>

<a href="index.php?page=tambah-pembayaran">Tambah {+}</a>