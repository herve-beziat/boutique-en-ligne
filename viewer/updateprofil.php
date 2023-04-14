<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
var_dump($_SESSION);

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
    <link rel="icon" type="image/x-icon" sizes="32*32" href="./assets/img/logo.jpg">
    <!-- TITRE DU DOCUMENT -->
    <title>profilupdate</title>
</head>
<body>
    <?php require_once('../include/header.php') ?>

    <div id="container-update">
        <form action="#" method="POST" id="form-update">
            <h1>Modifier le profil</h1>
            
            <label for="login">Login</label>
            <input type="text" name="login" id="login" placeholder="<?php echo $_SESSION['login'] ?>">
            <label for='email'>Email</label>
            <input type="email" name="email" id="email" placeholder="<?php echo $_SESSION['email'] ?>">
            <label for='nom'>Nom</label>
            <input type='text' name='nom' id='nom' placeholder="<?php echo $_SESSION['nom'] ?>">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="**********">
            <label for="conf-pass">Confirmation Mot de passe</label>
            <input type="password" name="conf-pass" id="conf-pass" placeholder="**********">
            <p id="mess_form"></p>
            <button type="submit" id="btn-update" name="submit">Modifier le profil</button>
        </form>
    </div>

    <?php require_once('../include/footer.php') ?>

</body>
</html>