<!DOCTYPE html>
<html>
<head>
        <title> Selamat Datang </title>
        <eta name='viewport' content='width= device-width,initial-scale=1,0'>
        <link rel='stylesheet' href='main.css'>
</head>
<body>
<div class="container">
<div class="header">
<h1 align="center"> Selamat Datang di Web Pembayaran SPP</h1>
</div>
<div class="main">
<div class="left">
<h3 align="left">Menu</h3>
         <ul>
         <li><a href="index.php">Developer</a></li>
         <li><a href="index.php?page=tampil-siswa">Siswa</a></li>
         <li><a href="index.php?page=spp">spp</a></li>
         <li><a href="index.php?page=kelas">kelas </a></li>
         <li><a href="index.php?page=pembayaran">pembayaran </a></li>
         <li><a href="index.php?page=petugas">petugas </a></li>
        </ul>
        
<!-- <li><a href="index.php?page=home">Home</a></li>
<li><a href="index.php?page=profil">Profile</a></li>
<li><a href="https://www.instagram.com/fajari_14?igshid=YmMyMTA2M2Y=">Media Social</a></li>
<li><a href="index.php?page=hitungluas">Luas Kubus</a></li> -->
</ul>
</div>
<div class="middle">
<h3 align="center">Tabel Pengisian</h3>
<?php 
$page =(isset($_GET['page'])) ? 
$_GET['page'] : 'main';
switch($page) {
     case 'tambah-siswa':
        include 'tambah-siswa.php';
        break;
     case 'tampil-siswa':
        include 'tampil-siswa.php';
        break;   
        case 'edit':
         include 'edit.php';
         break;
     case 'spp':
        include 'spp.php';
        break;   
     case 'tambah-spp':
        include 'tambah-spp.php';
        break; 
        case 'edit-spp':
         include 'edit-spp.php';
         break;  
     case 'kelas':
        include 'kelas.php';
        break;   
     case 'tambah-kelas':
        include 'tambah-kelas.php';
        break;   
        case 'edit_kelas':
         include 'edit_kelas.php';
         break;
     case 'pembayaran':
        include 'pembayaran.php';
        break;   
     case 'tambah-pembayaran':
        include 'tambah-pembayaran.php';
        break;
        case 'edit-pembayaran':
         include 'edit-pembayaran.php';
         break;
        
     case 'petugas':
        include 'petugas.php';
        break;   
     case 'tambah-petugas':
        include 'tambah-petugas.php';
        break;
        case 'edit-petugas':
         include 'edit-petugas.php';
         break;
     case 'main';
        default:
            include 'developer.php';
    
     }


?>

</div>
<div class='footer'>
<p align='center'>Coppyright & copy : 2026 Raffa Fajar </p>
</div>
</body>
</html>