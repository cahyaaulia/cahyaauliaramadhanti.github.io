<?php 
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "login_cahya";
  $koneksi = mysqli_connect($server, $username, $password, $database);
  if (!$koneksi) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
  }
?>