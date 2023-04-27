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
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/styleAddArticle.css">
    <!-- LINK FONT -->
    <!-- LINK JS -->
    <!-- LINK FAV ICON -->
    <link rel="icon" type="image/x-icon" sizes="32*32" href="../assets/img/logo.jpg">
    <!-- TITRE DU DOCUMENT -->
    <title>Add articles</title>
</head>
<body>
<?php require_once('../include/header.php') ?>

    <div id="container-addArticle">
        <form action="" method="POST" id="form-addArticle">
            <h1>Ajouter un article</h1>
            <input type="text" name="nom_article" id="nom_article" placeholder="Nom de l'article">
            <input type="number" name="prix" id="prix" placeholder="prix">
            <input type="text" name="description" id="description" placeholder="description">
            <input type="file" name="photo" id="photo" placeholder="Photo">
            <input type="number" name="stock" id="stock" placeholder="stock">
            <input type="text" name="categorie" id="categorie" placeholder="categorie">
            <p id="mess_form"></p>
            <button type="submit" name="submit">Ajouter</button>
        </form>
    </div>

<?php require_once('../include/footer.php') ?>
</body>
</html>