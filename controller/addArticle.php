<?php
require_once('../src/Article.php');
$article = new Article;
$mess_done = "L'article a été ajouté";

if(isset($_POST['nom_article'])&& isset($_POST['prix'])&& isset($_POST['description']) &&isset($_POST['photo']) &&isset($_POST['stock'])&& isset($_POST['categorie'])){

    $nom_article=htmlspecialchars($_POST['nom_article']);
    $prix=htmlspecialchars($_POST['prix']);
    $description=htmlspecialchars($_POST['description']);
    $photo=htmlspecialchars($_POST['photo']);
    $stock=htmlspecialchars($_POST['stock']);
    $categorie=htmlspecialchars($_POST['categorie']);

  $article->addArticle($nom_article,$prix,$description,$photo,$stock,$categorie);

  return $mess_done;
}
?>