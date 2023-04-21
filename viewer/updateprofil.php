<?php
session_start();
require_once('../config/db.php');
require_once('../src/Users.php');
require_once('../controller/update.php');


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/styleprofil.css">
    <!-- LINK FONT -->
    <!-- LINK JS -->
   <script src = "../scripts/updateprofil.js" defer></script>
    <!-- LINK FAV ICON -->
    <link rel="icon" type="image/x-icon" sizes="32*32" href="./assets/img/logo.jpg">
    <!-- TITRE DU DOCUMENT -->
    <title>profilupdate</title>
</head>
<body>
    <?php require_once('../include/header.php') ?>

    <div id="container-update">
        <form action="" method="POST" id="form-update">
            <h1>Modifier le profil</h1>
            
           
            <input type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?>">
            <input type="email" name="email" id="email" value="<?php echo $_SESSION['email'] ?>">
            <input type='text' name='nom' id='nom' value="<?php echo $_SESSION['nom'] ?>">
            <input type='text' name='prenom' id='prenom' value="<?php echo $_SESSION['prenom'] ?>">
            <input type="password" name="password" id="password" value="">
            <input type="password" name="conf-pass" id="conf-pass" value="">
            <p id="mess_form"></p>
            <button type="submit" id="btn-update" name="submit">Modifier le profil</button>
        </form>
    </div>

    <?php require_once('../include/footer.php') ?>

</body>
</html>