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

    Public function deleteArticle($id) {
        require_once('../config/db.php');
        global $bdd;
        $mess_done = "Cet artice a bien été supprimé";
        $req = $bdd->prepare('DELETE FROM article WHERE id = :id');
        $req->bindParam(':id', $id);
        $req->execute();
        return $mess_done;
    }

    Public static function displayUsers() {
        require_once('../config/db.php');
        global $bdd;
        $req = $bdd->prepare("SELECT * FROM `utilisateurs`");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        var_dump($result);
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

    Public static function deleteUser($id) {
        require_once('../config/db.php');
        global $bdd;
        $mess_done = "Cet utilisateur a bien été supprimé";
        $req = $bdd->prepare("DELETE FROM `utilisateurs` WHERE id = :id");
        $req->bindParam(':id', $id);
        $req->execute();
        return $mess_done;
    }




}

// $disUsers =new Admin;
// $disUsers->displayUsers();

?>