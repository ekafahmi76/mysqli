<?php
require 'config.php';

$sql = "SELECT * FROM users ORDER BY username ASC LIMIT 0, 30";

$select = $connection->query($sql);
?>

<table>
  <tr>
    <td>No.<td>
    <td>Username<td>
    <td>Password<td>
    <td>Email<td>
    <td>Opsi<td>
  </tr>
  <?php
  $no = 1;
  while ($user = $select->fetch_assoc()) {
    ?>
    <tr>
      <td><?php echo $no;?><td>
      <td><?php echo $user['username'];?><td>
      <td><?php echo $user['password'];?><td>
      <td><?php echo $user['email'];?><td>
      <td>
        <a href="edit-user.php?id=<?php echo $user['id_user'];?>">edit</a>
        |
        <a href="delete-user.php?id=<?php echo $user['id_user'];?>">delete</a><td>
    </tr>
    <?php
    $no++;
  }
   ?>
</table>

<hr>
<form action="add-user.php" method="post">
  <label for="">Username</label><br>
  <input type="text" name="username" placeholder="isi username"/>
  <br>
  <label for="">Password</label><br>
  <input type="text" name="password" placeholder="isi password">
  <br>
  <label for="">Email</label><br>
  <input type="text" name="email" placeholder="email@mail.com">
  <br>
  <input type="submit" name="save" value="add-data"/>
</form>
