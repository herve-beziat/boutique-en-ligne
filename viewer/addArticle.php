<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../src/Article.php');
require_once('../controller/addArticle.php');


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
<form action="" method="POST" id="form-addArticle">
    <h1>Inscription</h1>
    <input type="text" name="nom_article" id="nom_article" placeholder="Nom de l'article">
    <input type="number" name="prix" id="prix" placeholder="prix">
    <input type="text" name="description" id="description" placeholder="description">
    <input type="file" name="photo" id="photo" placeholder="Photo">
    <input type="number" name="stock" id="stock" placeholder="stock">
    <input type="text" name="categorie" id="categorie" placeholder="categorie">
    <p id="mess_form"></p>
    <button type="submit" name="submit">Ajouter</button>
</form>
</body>
</html>