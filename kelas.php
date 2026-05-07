<table border="1" cellspacing="0" width="720"%>
    <tr  style="text-align; font-weight:bold; background-color:#eee; font-family: sans-serif;">
        <p><a href="kelas.php">/<a href ="tambah-kelas.php">Tambah Data</a></p>
        <td>No.</td>
        <td>id kelas</td>
        <td>nama kelas</td>
        <td>kompetensi keahlian</td>
        <td>Opsi</td>
    </tr>
<?php
include('koneksi.php');
$query=mysqli_query($koneksi,"SELECT * FROM kelas ORDER BY id_kelas")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr>';
   echo"<td><center>$no.</center></td>";
   echo'<td><center>'.$data['id_kelas'].'</center></td>';
   echo'<td><center>'.$data['nama_kelas'].'</center></td>';
   echo'<td><center>'.$data['kompetensi_keahlian'].'</center></td>';
   echo'<td><center><a href="edit_kelas.php?id_kelas='.$data['id_kelas'].'">edit</a> | <a href="hapus-kelas.php?id_kelas='.$data['id_kelas'].'"onclick="return confirm(\'Yakin?\')">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
    

</table>

<a href="index.php?page=tambah-kelas">Tambah {+}</a>