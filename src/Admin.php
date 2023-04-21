<?php

class Admin
{
    private ?int $id;
    private ?string $login;
    private ?int $id_droit;


    public function __construct()
    {
        //empty
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLogin()
    {
        return $this->login;
    }

    Public function setLogin($login)
    {
        $this->login = $login;
    }

    Public function getIdDroit()
    {
        return $this->id_droit;
    }

    Public function setId_droit($id_droit)
    {
        $this->id_droit = $id_droit;
        return $this;
    }

    Public function deleteArticle($id_article) {
        require_once('../config/db.php');
        $mess_done = "Cet artice a bien été supprimé";
        $req = $bdd->prepare('DELETE FROM article WHERE id_article = :id_article');
        $req->bindParam(':id_article', $id_article);
        $req->execute();
        return $mess_done;
    }

    Public static function displayUsers() {
        require_once('../config/db.php');
        $req = $bdd->prepare('SELECT * FROM users');
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    Public static function updateArticle($stock,$prix,$id_article) {
        require_once('../config/db.php');
        $mess_done = "Cet article a bien été modifié";
        $req = $bdd->prepare('UPDATE article SET stock = :stock, prix = :prix WHERE id_article = :id_article');
        $req->bindParam(':stock', $stock);
        $req->bindParam(':prix', $prix);
        $req->bindParam(':id_article', $id_article);
        $req->execute();
        return $mess_done;  
    }

    Public static function deleteUser($id_user) {
        require_once('../config/db.php');
        $mess_done = "Cet utilisateur a bien été supprimé";
        $req = $bdd->prepare('DELETE FROM users WHERE id_user = :id_user');
        $req->bindParam(':id_user', $id_user);
        $req->execute();
        return $mess_done;
    }




}