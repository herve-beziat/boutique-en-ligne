<?php
if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['conf-pass'])) {

    echo Users::register($_POST['login'], $_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['password']);
    die();
}



?>