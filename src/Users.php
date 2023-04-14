<?php

class Users {

    private ?int $id;
    private ?string $login;
    private ?string $password;
    private ?string $email;
    private ?string $prenom;
    private ?string $nom;


    public function __construct()
    {
        //empty
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function getID()
    {
        return $this->id;
    }

    function setLogin($login)
    {
        $this->login = $login;
    }

    function getLogin()
    {
        return $this->login;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function setNom($nom)
    {
        $this->nom = $nom;
    }

    function getNom()
    {
        return $this->nom;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function getPassword()
    {
        return $this->password;
    }

    public static function register($login, $email, $nom, $prenom, $password)
    {
        require_once('../config/db.php');
        global $bdd;
        $login = trim(htmlspecialchars($login));
        $email = trim(htmlspecialchars($email));
        $prenom = trim(htmlspecialchars($prenom));
        $nom = trim(htmlspecialchars($nom));

        $mess_exist ="Utilisateur déjà existant";
        $mess_champ ="Veuillez remplir tous les champs";
        $mess_done="Inscription réussie";

        if(empty($login) || empty($email) || empty($prenom) || empty($nom) || empty($password)){
            return $mess_champ;
        }else{
            //requête pour savoir si un user exist;
            $query = $bdd->prepare('SELECT * FROM utilisateurs WHERE login = :login');
            $query->bindParam(':login', $login, PDO::PARAM_STR, 255);
            $query->execute();
            $result = $query->fetch();

            if($result) {
                return $mess_exist;
            }else {
                if ($password)
                $id_droit = 2; //client boutique par défaut
                $pass_hash = password_hash($password, PASSWORD_BCRYPT);
                $request = $bdd->prepare('INSERT INTO utilisateurs(login,email,nom,prenom,password,id_droit) values(:login,:email,:nom,:prenom,:password,:id_droit)');
                $request->bindParam(':login', $login, PDO::PARAM_STR, 255);
                $request->bindParam(':email', $email, PDO::PARAM_STR, 255);
                $request->bindParam(':password', $pass_hash, PDO::PARAM_STR, 255);
                $request->bindParam(':id_droit', $id_droit, PDO::PARAM_INT);
                $request->bindParam(':prenom', $prenom, PDO::PARAM_STR, 255);
                $request->bindParam(':nom', $nom, PDO::PARAM_STR, 255);
                $request->execute();
                return $mess_done;

            }
        }
    }




    public static function connect($login,$password){
        require_once('../config/db.php');
        global $bdd;
        $mess_error = "Veuillez saisir tous les champs";
        $mess_login = "Le user n'existe pas ";
        $mess_password = "Le mot de passe est incorrect";
        $mess_done = "Connexion au profil réussie";

        if(empty($login) || empty($password)){
            return $mess_error;
        }else{

            $request = $bdd->prepare("SELECT COUNT(*) FROM utilisateurs WHERE login = :login ");
            $request->bindParam(":login", $login);
            $request->execute();
            $count = $request->fetchColumn();
            if($count>0){
                $request=$bdd->prepare("SELECT * FROM utilisateurs WHERE login = :login");
                $request->bindParam(':login', $login);
                $request->execute();
                $row = $request->fetch(PDO::FETCH_ASSOC);
                if(password_verify($password,$row['password'])){
                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['email'] = $email;
                    $_SESSION['nom'] = $nom;
                    $_SESSION['id']=$row['id'];
                    $_SESSION['id_droit'] = $row['id_droit'];
                    return $mess_done;

                }else{
                    return $mess_password;
                }

            }else{
                return $mess_login;
            }

        }
    

    }

    public static function logout()
    {
        session_start();
        session_destroy();
        header('Location: ../index.php');
        exit();
    }
}

// $users = new Users;
// $users->register('y','y','y@mail.com','y','y');

?>