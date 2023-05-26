<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../src/Article.php');

$article =new Article;
$article->displayArticle();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($result as $value) : ?>
    <div id ="display_articles">
        <img src="../assets/img/"<?= $value['photo'] ?>alt="img">
        <h2><?= $value['nom_article'] ?></h2>
        <p><?= $value['prix'] ?>€</p>
        <button type="submit" name ="addPanier" id="addPanier" >Ajouter au Panier</button>

    </div>
    <?php endforeach ?>
</body>
</html>