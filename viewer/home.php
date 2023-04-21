<?php
session_start();
require_once '../src/Users.php';


?>

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
    <!-- LINK FAV ICON -->
    <link rel="icon" type="image/x-icon" sizes="32*32" href="../assets/img/logo.png">
    <!-- TITRE DU DOCUMENT -->
    <title>CandyShop</title>
</head>

    <?php require_once('../include/header.php') ?>

<body>

    

    <?php if(isset($_SESSION['login'])){
        echo '<h1>Bienvenue ' .$_SESSION['login'] . '</h1>';
    }
        else{
            echo "Pas connecté";
        }
    ?>

    <div class="top-container">
        <ul>
            <li><span>Devenir Membre ? <a href="./signup.php">Sign-Up</a></span></li>
            <li><span>UpdateProfil <a href="./updateprofil.php">Profil</a></span></li>
        </ul>
    </div>
    
    <?php require_once('../include/footer.php') ?>
    
</body>
</html>