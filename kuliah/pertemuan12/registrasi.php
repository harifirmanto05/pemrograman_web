<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan.');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'user gagal ditambahkan.';
  }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <h3>Registrasi</h3>
  <form action="" method="POST">
    <ul style="list-style-type: none;">
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus autocomplete="off" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <br>
      <li>
        <label>
          Konfirmasi password :
          <input type="password" name="password2" required>
        </label>
      </li>
      <br>
      <li>
        <button type="submit" name="registrasi">Registrasi</button>
      </li>
    </ul>

  </form>

</body>

</html>