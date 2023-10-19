<?php
require 'koneksi.php';

$id = $_GET["id"];

$delete_sql = "DELETE FROM mahasiswa WHERE id = $id";
$result = mysqli_query($conn, $delete_sql);

if($result) {
    echo "<script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
    </script>";
}else {
    echo "<script>
    alert('data gagal dihapus!');
    document.location.href = 'index.php');
</script>";
}