<table border="1" cellspacing="0" width="700"%>
    <tr  style="text-align; font-weight:bold; background-color:#eee; font-family: sans-serif;">
        <p><a href="tampil-siswa.php">/<a href ="tambah-siswa.php">Tambah Data</a></p>
        <td>No.</td>
        <td>nis</td>
        <td>Nama Lengkap</td>
        <td>id_kelas</td>
        <td>alamat</td>
        <td>no_hp</td>
        <td>id_spp</td>
        <td>Opsi</td>
    </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nis")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo'<td><center>'.$data['nis'].'</center></td>';
   echo'<td><center>'.$data['nama'].'</center></td>';
   echo'<td><center>'.$data['id_kelas'].'</center></td>';
   echo'<td><center>'.$data['alamat'].'</center></td>';
   echo'<td><center>'.$data['no_hp'].'</center></td>';
   echo'<td><center>'.$data['id_spp'].'</center></td>';
   echo'<td><center><a href="edit.php?nis='.$data['nis'].'">Edit</a> / <a href="hapus.php?nis='.$data['nis'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>

    

</table>

<a href="index.php?page=tambah-siswa">Tambah {+}</a>