<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan.');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "Data gagal ditambahkan.";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <style>
    ul {
      list-style-type: none;
    }
  </style>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <br>

      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <br>

      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <br>

      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <br>

      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <br>

      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>

  </form>

</body>

</html>