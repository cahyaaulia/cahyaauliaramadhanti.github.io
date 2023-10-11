<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];
    $password = $_POST["password"];

    // Lakukan apa pun yang Anda inginkan dengan data ini, contohnya mencetaknya
    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . "<br>";
    // Jangan mencetak password ke layar untuk alasan keamanan
}
?>
