<table border="1" cellspacing="0" width="700"%>
    <tr  style="text-align; font-weight:bold; background-color:#eee; font-family: sans-serif;">
        <p><a href="spp.php">/<a href ="tambah-spp.php">Tambah Data</a></p>
        <td>No.</td>
        <td>id_spp</td>
        <td>tahun</td>
        <td>nominal</td>
        <td>Opsi</td>
    </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM spp ORDER BY id_spp")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo'<td><center>'.$data['id_spp'].'</center></td>';
   echo'<td><center>'.$data['tahun'].'</center></td>';
   echo'<td><center>'.$data['nominal'].'</center></td>';
   echo'<td><center><a href="edit-spp.php?id_spp='.$data['id_spp'].'">edit</a> | <a href="hapus-spp.php?id_spp='.$data['id_spp'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
    

</table>
<a href="index.php?page=tambah-spp">Tambah {+}</a>

