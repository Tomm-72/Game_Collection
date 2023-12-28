<?php
require_once ('models/user_model.php');
require_once ('views/connexion_page.php');
require "models/PDO.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $mdp = getMDPUser($_POST['email']);
    if($mdp == $_POST['password']){
        
    }
}
