<?php
require_once ('models/user_model.php');
require_once ('views/connexion_page.php');
require "models/PDO.php";
session_destroy();
session_start();

if(isset($_POST['email']) && isset($_POST['password'])){
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "L'adresse email n'est pas valide.";
    } else {
        $user = getMDPUser($email);

        if ($user && password_verify($_POST["password"], $user['mdp_utilisateur'])) {
            $_SESSION['id_utilisateur'] = getIdUser($email);
            header("Location: accueil");
            exit;
        } else {
            echo "L'email ou le mot de passe ne correspond pas.";
        }
    }
}
