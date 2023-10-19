<?php
require 'koneksi.php';
 
$read_sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $read_sql);

$mahasiswa = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $row;    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>DATA MAHASISWA</h1>
    <a href="create.php"><button>Tambah Data</button></a>
    <form action="" method="post">
        <input type="text" name="keyword" placeholder="Masukkan keyword pencarian..." autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
        <a href="index.php"><button>Refresh</button></a>
    </form>
    <table border=2 cellspacing=2 cellpadding=10>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>PRODI</th>
            <th>ACTION</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $mhs ["nim"] ?></td>
                <td><?= $mhs ["nama"] ?></td>
                <td><?= $mhs ["kelas"] ?></td>
                <td><?= $mhs ["prodi"] ?></td>
                <td>
                    <a href="update.php"><button>Update</button></a>
                    <a href="delete.php"><button>Delete</button></a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>

</html>