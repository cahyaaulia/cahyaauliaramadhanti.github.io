<?php
  require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="addDataaksi.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Data Perhiasan</h3>
        <div class="inputBox">
          <label for="">Nama Barang</label>
          <input type="text" name="nama" placeholder="Kalung" required>
        </div>
        <div class="inputBox">
          <label for="">Harga</label>
          <input type="number" name="harga" placeholder="100000" required>
        </div>
        <div class="inputBox">
          <label for="">Stock</label>
          <input type="number" name="stock" placeholder="10" required>
        </div>
        <div class="inputBox">
          <label for="">Bukti Pembayaran</label>
          <input type="file" name="foto"  required>
        </div>
        <input type="submit" value="Tambah data" name="tambah">
        <a href="test.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>