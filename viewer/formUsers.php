<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../src/Article.php');
require_once('../src/Admin.php');

$disUsers =new Admin;
$test=$disUsers->displayUsers();
// var_dump($disUsers);



?>
<div class="table-container">
  <table id="tableUsers">
    <tr>
      <th>id</th>
      <th>Login</th>
      <th>Mail</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th></th>
    </tr>
    <?php foreach($test as $value) : ?>
    <tr>
      <td><?= $value['id'] ?></td>
      <td><?= $value['login'] ?></td>
      <td><?= $value['email'] ?></td>
      <td><?= $value['nom'] ?></td>
      <td><?= $value['prenom'] ?></td>
      <td>
        <form action="#" method="POST">
          <input type="hidden" name="id" value="<?= $value['id'] ?>">
          <button type="submit" name="deleteUser">Supprimer</button>
        </form>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</div>
