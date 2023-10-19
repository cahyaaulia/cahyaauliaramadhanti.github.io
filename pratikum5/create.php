<?php
require 'koneksi.php' ;

if(isset($_POST["submit"])) {
    $nim = htmlspecialchars ($_POST['nim']);
    $nama = htmlspecialchars ($_POST['nama']);
    $kelas = htmlspecialchars ($_POST['kelas']);
    $prodi = htmlspecialchars ($_POST['prodi']);

    $insert_sql = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$kelas', '$prodi')";
    $result = mysqli_query ($conn, $insert_sql);

    if($result) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>";
    }else {
        echo "<script>
        alert('data gagal ditambahkan!');
        document.location.href = 'create.php');
    </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3>Tambah Data</h3>
    <form action="" method="post">
        <label for="nim">NIM</label><br>
        <input type="nim" name="nim" id="nim"><br><br>
        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama"><br><br>
        <label for="kelas">Kelas</label><br>
        <input type="radio" name="kelas" id="kelas" value="A">A
        <input type="radio" name="kelas" id="kelas" value="B">B
        <input type="radio" name="kelas" id="kelas" value="C">C<br><br>
        <label for="prodi">Prodi</label><br>
        <input type="text" name="prodi" id="prodi"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>