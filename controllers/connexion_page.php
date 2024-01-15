<?php
require_once ('models/user_model.php');
require_once ('views/connexion_page.php');
require "models/PDO.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $mdp = getMDPUser($_POST['email']);
    $mdp = password_hash($mdp, PASSWORD_BCRYPT);
    if($mdp == $_POST['password']){
        $_SESSION['id']=getIdUser($mail);
    }else{
        echo "l'email et le mot de passe ne correspondent pas";
    }
}
