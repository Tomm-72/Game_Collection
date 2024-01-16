<?php
require_once ('models/user_model.php');
require_once ('views/connexion_page.php');
require "models/PDO.php";
session_destroy();
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    $user = getMDPUser($_POST['email']);
    if ($user) {
        if (password_verify($_POST["password"], $user['mdp_utilisateur'])) {
            $_SESSION['id_utilisateur'] = getIdUser($_POST['email']);
            header("Location: accueil");
        }
        else{
            echo "l'email et le mot de passe ne correspondent pas";
        }
    }
}
