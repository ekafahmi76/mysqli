<?php
if (isset($_GET['id'])) {
    // aksinya
    $id = $_GET['id']; // sesuai dengan niali parameter.

    require 'config.php';

    $sql = "SELECT * FROM users WHERE id_user = '$id'";
    $select = $connection->query($sql);

    if ($select->num_rows > 0) {
        while ($user = $select->fetch_assoc()) { ?>
          <form action="update-user.php" method="post">
            <label for="">Username</label><br>
            <input type="hidden" name="iduser" value="<?php echo $id;?>">
            <input type="text" name="username" placeholder="isi username" value="<?php echo $user['username'];?>"/>
            <br>
            <label for="">Password</label><br>
            <input type="text" name="password" placeholder="isi password" value="<?php echo $user['password'];?>">
            <br>
            <label for="">Email</label><br>
            <input type="text" name="email" placeholder="email@mail.com" value="<?php echo $user['email'];?>">
            <br>
            <input type="submit" name="save" value="Update"/>
          </form>
          <?php
        }
    }
} else {
  echo "gagal";
}
 ?>
