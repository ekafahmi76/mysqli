<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    require 'config.php';

    $sql = "DELETE FROM users WHERE id_user = '$id'";

    $delete = $connection->query($sql);

    if ($delete) {
        echo "data berhasil dihapus";
    } else {
        echo "gagal dihapus";
    }
} else {
  echo "gagal";
}
 ?>
