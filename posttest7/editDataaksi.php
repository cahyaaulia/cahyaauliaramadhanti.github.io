<?php
  require "koneksi.php";

  if (isset($_POST["ubah"])) {

    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $gambar = $_FILES["foto"]["name"];
    $tmp = $_FILES["foto"]["tmp_name"];

    $tanggal_hari_ini = date("Y-m-d");

    $info = pathinfo($gambar); 
    $ekstensi = $info['extension']; 
    $gambarBaru = $tanggal_hari_ini . $nama . '.' . $ekstensi;

    
    if (move_uploaded_file($tmp, 'databaseImages/' . $gambarBaru)){
      $sql = "UPDATE tb_perhiasan SET nama = '$nama', harga = '$harga', stock = '$stock',  foto = '$gambarBaru' WHERE id = '$id' ";

      $result = mysqli_query($koneksi, $sql);
      if ($result) {
        echo "
            <script>
              alert('Data berhasil diubah');
              document.location.href = 'test.php';
            </script>
          ";
      } else {
        echo "
          <script>
            alert('Data gagal diubah');
            document.location.href = 'test.php';
          </script>
          ";
      }
    }
  }
?>