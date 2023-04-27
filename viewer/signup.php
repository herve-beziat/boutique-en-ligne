<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../controller/inscription.php');
require_once('../controller/connexion.php');

?>


<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/stylesign.css">
    <!-- LINK FONT -->
    <!-- LINK JS -->
    <script defer src="../scripts/inscription.js"></script>
    <script defer src="../scripts/connexion.js"></script>
    <script defer src="../scripts/signup.js"></script>
    <!-- <script defer src="./scripts/script.js"></script> -->
   <!-- LINK FAV ICON -->
   <link rel="icon" type="image/x-icon" sizes="32*32" href="../assets/img/logo.png">
    <!-- <link rel="icon" type="image/x-icon" sizes="32*32" href="/var/www/html/boutique-en-ligne/assets/img/logo.jpg"> -->
    <!-- TITRE DU DOCUMENT -->
    <title>signup</title>
</head>
<?php require_once('../include/header.php') ?>
<body>

    <div>
        <ul>
            <?php if(empty($_SESSION['login'])) : ?>
                <li><a href="../index.php"> &larr; RETOUR À L'ACCUEIL</a></li>
                <!-- <li><a href="#" id="inscription">INSCRIPTION</a></li> -->
                <li><a href="#" id="connexion">ESPACE MEMBRE</a></li>
            <?php else : ?>
                <li><a href="../index.php"> &larr; RETOUR À L'ACCUEIL</a></li>
                <li><a href="../controller/logout.php" id="logout">Déconnexion</a></li>
            <?php endif; ?>
        </ul>
            </div>

    <div class="container-sign">  
    </div>

    <div class="container-form-sign"> 
    </div>

</body>
<?php require_once('../include/footer.php') ?>
</html>