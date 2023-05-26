<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../src/Article.php');
require_once('../controller/panelAdminController.php');
require_once('../src/Admin.php');
require_once('../controller/addArticle.php');







?>


<?php if($_SESSION['login'] == 'admin'): ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- LINK FONT -->
    <!-- LINK JS -->
    <script defer src="../scripts/panelAdmin.js"></script>
    <!-- LINK FAV ICON -->
    <link rel="icon" type="image/x-icon" sizes="32*32" href="../assets/img/logo.png">
    <!-- TITRE DU DOCUMENT -->
    <title>panelAdmin</title>
</head>
<body>
<?php require_once('../include/header.php') ?>
    <!-- <div class="top-container">
        <ul>
            <li><span>Devenir Membre ? <a href="./signup.php">Sign-Up</a></span></li>
            <li><span>UpdateProfil <a href="./updateprofil.php">Profil</a></span></li>
        </ul>
    </div> -->
    <div class="container">
        <div class="container-left">
            <div class="container-left-top">
                <h2>Menu</h2>
            </div>
            <div class="container-left-bottom">
                <ul>
                    <li><a href="./panelAdmin.php">Accueil</a></li>
                    <li><a href="#" id="load-users">Afficher les utilisateurs</a></li>
                    <li><a href="#" id="addArticleLink">Ajouter un produit</a></li>
                    <li><a href="#" id="deleteArticleLink">Effacer un produit</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="container-right">
            <div class="container-right-top">
                <h3>Bienvenue sur le panel admin</h3>
            </div>
            <div class="container-right-bottom">
                <div id="container-admin">
                
                </div>
            </div>
        </div>
    </div>
    <?php require_once('../include/footer.php') ?>
    
</body>
</html>
<?php ; else: ?>
<?php header('location: ./home.php')?>
<?php endif;?>