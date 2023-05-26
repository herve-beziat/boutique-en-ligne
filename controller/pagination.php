<?php

// Determine la page sur laquelle nous sommes

if(isset($_GET['page']) && !empty($_GET['page'])){
    $currentPage = (int) strip_tags($_GET['page']); // 
}else{
    $currentPage=1;
}

require_once('../config/db.php');

//détermine le nombre d'articles total

$request = $bdd->prepare('SELECT COUNT(*) AS nb_articles FROM `article`');
$request->execute();
$result = $request->fetch();

$nbArticles = $result['nb_articles'];


// Détermine le nombre d'article par page 
$parPage = 12;

// Calcule le nombre de pages total
$pages = ceil($nbArticles / $parPage); // ceil est une fonction qui  arrondis à l'entier supérieur 

// Calcul du 1er article
$premier = ($currentPage * $parPage) - $parPage;

$request = $bdd->prepare('SELECT * FROM `article` ORDER BY `nom_article` LIMIT :premier,:parpage');
$request->bindValue(':premier', $premier, PDO::PARAM_INT);
$request->bindValue(':parpage', $parPage, PDO::PARAM_INT);
$request->execute();
$articles = $request->fetchAll(PDO::FETCH_ASSOC);

