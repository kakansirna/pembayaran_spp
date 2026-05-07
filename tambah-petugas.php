<?php
require 'koneksi.php';

if (isset($_POST['kirim'])){
    $id_petugas =$_POST['id_petugas'];
    $username =$_POST['username'];
    $password =$_POST['password'];
    $nama_petugas =$_POST['nama_petugas'];
    $level =$_POST['level'];

$sql ="INSERT INTO petugas (id_petugas,username,password,nama_petugas,level)VALUES('$id_petugas','$username','$password','$nama_petugas','$level')";
$query=mysqli_query($koneksi,$sql);

if($query){
    echo 'berhasil';

    header('location:index.php');
}
    
}
?>

<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
<p> <a href="index.php">Tambah Data</a></p>
<h3>Tambah Data kelas</h3>
<form action="" method="post">
 <table cellpadding="3" cellspacing="0">
  <tr>
   <td>id petugas</td>
   <td>:</td>  
   <td><input type="text" name="id_petugas" required></td>
  </tr>
  <tr>
   <td>username</td>
   <td>:</td>
   <td><input type="text" name="username" size="30" required></td>
  </tr>
  <tr>
   <td>password</td>
   <td>:</td>
   <td><input type="text" name="password" size="30" required></td>
  </tr>
  <tr>
  <tr>
   <td>nama_petugas</td>
   <td>:</td>
   <td><input type="text" name="nama_petugas" size="30" required></td>
  </tr>
  <tr>
    <td>level</td>
    <td>:</td>
 <td> <select name="level" required>
     <option value="">level</option>
     <option value="admin">admin</option>
     <option value="petugas">petugas</option>
</select>
    </td>
</tr>
   <td><button type="submit" name="kirim">Kirim</button></td>
  </tr>
 </table>
</form>
</body>
</html>
