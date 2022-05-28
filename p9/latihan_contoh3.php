<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <h1>Aplikasi Pendataan Mahasiswa</h1>
  <table class="table table-hover">
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>NIM</th>
      <th>Aksi</th>
    </tr>
    <!-- looping data -->
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) :  ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['foto']; ?>" alt="" width="50px" height="50px"></td>
        <td><?= $mhs['nim']; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs['nim']; ?>">Detail</a> | <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>