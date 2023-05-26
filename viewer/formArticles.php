<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../src/Article.php');
require_once('../src/Admin.php');


$disArticle = new Article;
$showArticle=$disArticle->displayArticle();

?>
<div class="table-container-articles">
  <table id="tableArticles">
    <tr>
      <th>id</th>
      <th>Nom de l'article</th>
      <th>Prix</th>
      <th>Stock</th>
      <th>id catégorie</th>
      <th></th>
    </tr>
    <?php foreach($showArticle as $value) : ?>
    <tr>
      <td><?= $value['id'] ?></td>
      <td><?= $value['nom_article'] ?></td>
      <td><?= $value['prix'] ?>€</td>
      <td><?= $value['stock'] ?></td>
      <td><?= $value['id_categorie'] ?></td>
      <td>
        <form action="#" method="POST">
          <input type="hidden" name="id" value="<?= $value['id'] ?>">
          <button type="submit" name="deleteArticle">Supprimer</button>
        </form>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</div>