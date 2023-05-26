<?php
if (session_id() == '') session_start();

require_once('../config/db.php');
require_once('../src/Article.php');

$articles = new Article();
$allBonbon = $articles->displayBonbon(3);


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINK JS -->
        <!-- LINK CSS -->
        <link rel="stylesheet" href="../assets/style.css">
        <link rel="stylesheet" href="../assets/displayArticle.css">
        <!-- LINK FAV ICON -->
        <link rel="icon" type="image/x-icon" sizes="32*32" href="../assets/img/logo.png">
        <title>One articles</title>
</head>
<body>
    <?php require_once('../include/header.php') ?>

<div class="container">
   <?php foreach($allBonbon as $value) : ?> 
    <p id="mess_form"></p>
            <a href= "oneArticle.php?id-product=<?=$value['id'] ?>">
                <div id ="display_articles">
                    <img src="../assets/img/<?= $value['photo'] ?>" alt="img">
                    <h2><?= $value['nom_article'] ?></h2>
                    <p class="sous_titre"><?= $value['sous_titre'] ?></p>
                    <p class ="prix"><?= $value['prix'] ?>€</p>
                    <button type="submit" name ="addPanier" id="addPanier" >Ajouter au Panier</button>
                </div>
            </a>
    <?php endforeach ?> 
</div>

<?php require_once('../include/footer.php') ?>
</body>
</html>