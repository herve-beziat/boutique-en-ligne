<?php
if (session_id() == '') session_start();

require_once('../config/db.php');
require_once('../src/Users.php');
//require_once('../src/Article.php');

//$allArticle = new Article;

//$article = $allArticle -> displayArticle();

require_once('../controller/pagination.php');
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
        <title>Display articles</title>
</head>
<body>
    <?php require_once('../include/header.php') ?>

<div class="container">
   <?php foreach($articles as $value) : ?> 
    <p id="mess_form"></p>
        <div id ="display_articles">
            <img src="../assets/img/<?= $value['photo'] ?>" alt="img">
            <h2><?= $value['nom_article'] ?></h2>
            <p class="description"><?= $value['description'] ?></p>
            <p class ="prix"><?= $value['prix'] ?>€</p>
            <button type="submit" name ="addPanier" id="addPanier" >Ajouter au Panier</button>
        </div>
     <?php endforeach ?> 
</div>
<ul class="pagination">
    <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
    <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
        <a href="?page=<?= $currentPage - 1 ?>">Précédente</a>
    </li>
     <?php for($page = 1; $page <= $pages; $page++): ?>
    <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
    <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
         <a href="?page=<?= $page ?>"><?= $page ?></a>
    </li>
    <?php endfor ?>
    <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
    <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
        <a href="?page=<?= $currentPage + 1 ?>" class = "page-link">Suivante</a>
    </li>
</ul>
<?php require_once('../include/footer.php') ?>
</body>
</html>



