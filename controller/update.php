<?php

require_once('../src/Users.php');


$user = new Users();


$mess_error = "Veuillez saisir tous les champs";
$mess_done = "Modification réussie";
$mess_password ="Les mots de passe ne sont pas identiques!";
$mess_login = "Ce login existe déjà!";

//if(isset($_POST["submit"])){

    if (!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['password']) && !empty($_POST['conf-pass'])) {
        $login = htmlspecialchars($_POST["login"]);
        $email = htmlspecialchars($_POST["email"]);
        $nom =  htmlspecialchars($_POST["nom"]);
        $prenom =  htmlspecialchars($_POST["prenom"]);
        $password = htmlspecialchars($_POST["password"]);
        $conf_pass =htmlspecialchars($_POST["conf-pass"]);
        $id = $_SESSION['id'];
        
        if ($user->checkLoginExist($login) === 0 || $login === $_SESSION['login']){
            
            if($password === $conf_pass){
              
                $user->updateUser($id,$login, $email, $nom, $prenom, $password);
                return $mess_done;
            }else{
                return $mess_password;
            }
        }else{
            return $mess_login;
        }
            
    }else{
        return $mess_error;
    }
//}

?>