<?php
require_once('../src/Article.php');
$article = new Article;
$mess_done = "L'article a été ajouté";
$mess_error= "Veuillez remplir tous les champs";

if(!empty($_POST['nom_article'])&& !empty($_POST['prix'])&& !empty($_POST['description']) &&!empty($_POST['photo']) &&!empty($_POST['stock'])&& !empty($_POST['categorie'])){

    $nom_article=htmlspecialchars($_POST['nom_article']);
    $prix=htmlspecialchars($_POST['prix']);
    $description=htmlspecialchars($_POST['description']);
    $photo=htmlspecialchars($_POST['photo']);
    $stock=htmlspecialchars($_POST['stock']);
    $categorie=htmlspecialchars($_POST['categorie']);

  $article->addArticle($nom_article,$prix,$description,$photo,$stock,$categorie);

  return $mess_done;
}else{
  return $mess_error;
}
?>