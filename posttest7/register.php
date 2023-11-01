<?php
require "koneksi_login.php";

if (isset($_POST["register"])) {
  $username = strtolower($_POST["username"]);
  $pass = $_POST["password"];
  $konfirmasi = $_POST["konfirmasi"];
  $role = 'user';

  // Ubah true disini
  if ($pass === $konfirmasi) {
    // Ubah pass dan result disini
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username' ");

    // Ubah true disini
    if (mysqli_fetch_assoc($result)) {
      echo "
          <script>
            alert('Username telah digunakan');
            document.location.href = 'register.php';
          </script>
        ";
    } else {
      // Ubah sql dan result disini
      $sql = "INSERT INTO users VALUES ('', '$role', '$username', '$pass')";
      $result = mysqli_query($koneksi, $sql);

      if (mysqli_affected_rows($koneksi) > 0) {
        echo "
          <script>
            alert('Registrasi berhasil');
            document.location.href = 'login.php';
          </script>
        ";
      } else {
        echo "
          <script>
            alert('Registrasi gagal');
            document.location.href = 'register.php';
          </script>
        ";
      }
    }
  } else {
    echo "
        <script>
          alert('Password tidak sama');
          document.location.href = 'register.php';
        </script>
      ";
  }
}
?>

<style>
  body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #B2DFFC; /* Warna biru muda pastel */
  background-image: linear-gradient(to right, #89CFF0 0%, #B2DFFC 100%);
}

.container {
  background: white;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  width: 400px;
  max-width: 100%;
  padding: 25px;
}

h3 {
  text-align: center;
  color: #333;
  margin-bottom: 25px;
  font-weight: 600;
}

.inputBox {
  position: relative;
  margin-bottom: 25px;
}

.inputBox label {
  display: inline-block;
  margin-bottom: 8px;
  color: #666;
}

.inputBox input,
.inputBox select {
  width: 100%;
  padding: 12px;
  border: 1px solid #89CFF0;
  border-radius: 6px;
  box-sizing: border-box;
  font-size: 15px;
}

.inputBox input:focus,
.inputBox select:focus {
  outline-color: #89CFF0;
}

input[type="submit"] {
  width: 100%;
  padding: 12px;
  border: none;
  background-color: #89CFF0;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #6EB5D1;
}

.links {
  text-align: center;
  margin-top: 20px;
}

.links p {
  color: #666;
  margin-bottom: 8px;
}

a {
  text-decoration: none;
  color: #6EB5D1;
  transition: color 0.3s;
}

a:hover {
  color: #89CFF0;
}

.khusus {
  font-weight: 600;
}


</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="register-login.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="" method="POST">
        <h3>Register</h3>
        <div class="inputBox">
          <label for="">Username</label>
          <input type="text" name="username" placeholder="username" required>
        </div>
        <div class="inputBox">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="password" required>
        </div>
        <div class="inputBox">
          <label for="">Konfirmasi Password</label>
          <input type="password" name="konfirmasi" placeholder="password" required>
        </div>
        <input type="submit" value="Register" name="register">

        <br><br><a href="login.php" background-color= #ff9a9e;>Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>