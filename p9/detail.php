<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['no'];

//query mhs berdasarkan NIM
$mahasiswa = query("SELECT * FROM mahasiswa WHERE nim =$id");
var_dump($mahasiswa);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Lengkap</title>
</head>

<body>
  <h2>Data Lengkap Mahasiswa</h2>
  <a href="latihan_contoh3.php">Kembali</a>
</body>

</html>