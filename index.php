<?php
session_start();
require_once 'src/Users.php';
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <!-- LINK FONT -->
    <!-- LINK JS -->
    <!-- LINK FAV ICON -->
    <link rel="icon" type="image/x-icon" sizes="32*32" href="./assets/img/logo.jpg">
    <!-- TITRE DU DOCUMENT -->
    <title>Index</title>
</head>
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
            <li><span>Devenir Membre ? <a href="./viewer/signup.php">Sign-Up</a></span></li>
            <li><span>UpdateProfil <a href="./viewer/updateprofil.php">Profil</a></span></li>
        </ul>
    </div>
    
</body>
</html>