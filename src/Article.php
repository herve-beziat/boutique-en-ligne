<?php
        if (session_id() == '') session_start();
        require_once('../config/db.php');

class Article{

    private ?int $id;
    private ?string $nom_article;
    private ?int $prix;
    private ?string $description;
    private ?string $photo;
    private ?int $stock;
    private ?string $categorie;



    public function __construct()
    {
        //empty
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setNomArticle($nom_article)
    {
        $this->nom_article = $nom_article;
    }

    public function getNom_Article()
    {
        return $this->nom_article;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }




    public static function addArticle($nom_article, $prix, $description, $photo, $stock, $categorie){

        require_once('../config/db.php');
        global $bdd;

        $request= $bdd->prepare('INSERT INTO article(nom_article,prix,description,photo,stock,id_categorie) values(:nom_article,:prix,:description,:photo,:stock,:id_categorie)');
        $request->bindParam(':nom_article', $nom_article);
        $request->bindParam(':prix', $prix);
        $request->bindParam(':description', $description);
        $request->bindParam(':photo', $photo);
        $request->bindParam(':stock', $stock);
        $request->bindParam(':id_categorie', $categorie);
        $request->execute();
    }

    public static function displayArticle(){
        

         require_once('../config/db.php');
         global $bdd;

         $request = $bdd->prepare('SELECT * FROM `article`');
         $request ->execute();
         $result = $request->fetchAll(PDO :: FETCH_ASSOC);
         return $result;
        
    }

    public static function oneArticle(int $id) 
    {
        

        require_once('../config/db.php');
        global $bdd;

        $request = $bdd->prepare('SELECT * FROM `article` Where id = :id');
        $request->bindParam(":id", $id);
        $request ->execute();
        $result = $request->fetchAll(PDO :: FETCH_ASSOC);
        return $result;
   }
   public static function displayBonbon(int $id) 
   {
       

       require_once('../config/db.php');
       global $bdd;

       $request = $bdd->prepare('SELECT * FROM `article` Where id_categorie = :id');
       $request->bindParam(":id", $id);
       $request ->execute();
       $result = $request->fetchAll(PDO :: FETCH_ASSOC);
       return $result;
  }

  public static function displayGoodies(int $id)  {
      

      require_once('../config/db.php');
      global $bdd;

      $request = $bdd->prepare('SELECT * FROM `article` Where id_categorie = :id');
      $request->bindParam(":id", $id);
      $request ->execute();
      $result = $request->fetchAll(PDO :: FETCH_ASSOC);
      return $result;
 }

}

?>