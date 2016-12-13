<?php
require 'config.php';
if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email)
            VALUES ('$username', '$password', '$email')";

    // eksen simpan
    $insert = $connection->query($sql);

    if ($insert) { // berhasil disimpan
        echo "berhasil";
    } else { // gagal simpan
      echo "gagal insert";
    }
} else {
  echo "gagal";
}
 ?>
