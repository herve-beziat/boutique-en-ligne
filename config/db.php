<?php
// Connexion à la base de donnée

$db = "mysql:host=localhost;dbname=boutique-en-ligne";

$host = "root";

$password ="";

try {
    $bdd = new PDO($db, $host, $password);
    //  echo "connexion réussie";
} catch (PDOException $e) {
    die('Erreur :' . $e->getMessage());
}

?>