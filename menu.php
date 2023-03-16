<?php

include "otentik.php";

session_start();
 if(isset($_SESSION["sesi_user"])) &&
 if(isset($_SESSION["sesi_pass"])) 

 {
    $sesi_user = $_SESSION["sesi_user"];
    $sesi_pass = $_SESSION["sesi_pass"];
 } else {
    
    $sesi_user = $_POST["pemakai"] ?? "";
    $sesi_pass = $_POST["sandi"] ?? "";
 }

 if (! otentikasi($sesi_user, $sesi_pass)) {
    $msg    = "Harap diisi dengan benar";
    $alamat =  "https://$NAMA_SERVER/bab20/login.php";
    header("location: $alamat?msg=msg");
    exit();
 }

 // Bentuk variables sesi
 $_SESSION["sesi_user"] = $sesi_user;
 $_SESSION["sesi_pass"] = $sesi_pass;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Manajement Data Bintang Film</title>
</head>
<body>
<center>
<h2>Manajement Data Bintang Film</h2>
<hr>
<a href="tambah.php">Menambah Data</a>
<br>
<a href="daftar.php">Mengubah/Menghapus Data</a>
<br>
<p>
    <h2>Film</h2>
    <a href="tambahfil.php">Menambah Data</a>
    <br>
    <a href="dall.php">Mengubah dan Menghapus Data</a>
</p>
<br>
 <p>
    <h2>Bintang Film dan Film</h2>
    <br>
    <p>
    <hr>
    <a href="logoout.php">Logoout</a>
</p>
</center> 
</body>
</html>

