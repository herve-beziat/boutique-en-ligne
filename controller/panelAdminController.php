<?php


require_once('../config/db.php');
require_once('../src/Admin.php');
require_once('../src/Article.php');

// Vérifier si la requête est de type POST et si l'ID de l'utilisateur est spécifié
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $userId = $_POST['id'];

    // Appeler la fonction de suppression de l'administrateur
    $result = Admin::deleteUser($userId);
}

    // Vérifier si la suppression s'est effectuée avec succès
//     if ($result) {
//         echo $result;
//     } else {
//         echo 'Une erreur est survenue lors de la suppression de l\'utilisateur.';
//     }
// } else {
//     echo 'Requête invalide.';
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $articleId = $_POST['id'];
    $admin = new Admin;
    $result = $admin->deleteArticle($articleId);
}
//     if ($result === "Cet article a bien été supprimé") {
//         echo $result;
//     } else {
//         echo 'Une erreur est survenue lors de la suppression de l\'article.';
//     }
// } else {
//     echo 'Requête invalide.';
// }

?>