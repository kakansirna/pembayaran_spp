<table border="1" cellspacing="0" width="700"%>
    <tr  style="text-align; font-weight:bold; background-color:#eee; font-family: sans-serif;">
        <p><a href="tampil-petugas.php">/<a href ="tambah-petugas.php">Tambah Data</a></p>
        <td>No.</td>
        <td>id_petugas</td>
        <td>username</td>
        <td>password</td>
        <td>nama_petugas</td>
        <td>level</td>
        <td>Opsi</td>
    </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM petugas ORDER BY id_petugas")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo'<td><center>'.$data['id_petugas'].'</center></td>';
   echo'<td><center>'.$data['username'].'</center></td>';
   echo'<td><center>'.$data['password'].'</center></td>';
   echo'<td><center>'.$data['nama_petugas'].'</center></td>';
   echo'<td><center>'.$data['level'].'</center></td>';
   echo'<td><center><a href="edit-petugas.php?id_petugas='.$data['id_petugas'].'">Edit</a> / <a href="hapus-petugas.php?id_petugas='.$data['id_petugas'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>

    

</table>

<a href="index.php?page=tambah-petugas">Tambah {+}</a>