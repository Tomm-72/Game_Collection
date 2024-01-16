<?php

require_once('models/user_model.php');
require_once('models/library_model.php');
$userId = $_SESSION["id_utilisateur"];
$userInfo = getUserInfoById($userId);
$userName = $userInfo["prenom_utilisateur"];
$userLastName = $userInfo["nom_utilisateur"];
$userEmail = $userInfo["mail_utilisateur"];

if (isset($_POST['deleteUser'])) {
    foreach (getLibraryOfUser($userId) as $game) {
        deleteGameInLibrary($userId, $game["id_jeu"]);
    }
    deleteUser($userId);
    header('Location: connexion');
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: connexion');
}
if (isset($_POST['editUser'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $passwordConfirmed = $_POST['passwordConfirmed'];
    if ($password == $passwordConfirmed) {
        if (!empty($password) && $password == $passwordConfirmed) {
            $password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            $password = $userInfo["mdp_utilisateur"];
        }
        $userName = $prenom;
        $userLastName = $nom;
        $userEmail = $email;
        updateUser($userId, $nom, $prenom, $password, $email);
    } else {
        echo "Les mots de passe ne correspondent pas";
    }
}
require_once('lib/component/header.php');
require_once('views/edit_user_profile.php');
//require_once ('lib/component/footer.php');