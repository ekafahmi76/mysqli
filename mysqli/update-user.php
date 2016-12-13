<?php
if (isset($_POST['save'])) {

    require 'config.php';

    $id = $_POST['iduser'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username = '$username',
                             password = '$password',
                             email = '$email'
                         WHERE
                             id_user = '$id'";
    $update = $connection->query($sql);

    if ($update) {
      echo "update success";
    } else {
      echo "update gagal";
    }

} else {
  echo " gagal";
}
 ?>
