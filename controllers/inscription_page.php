<?php
require("../models/PDO.php");
require("../models/user_model.php");

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["passwordConfirmed"])){
    $email=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $nom=filter_var($_POST["nom"], HTML_SPECIALCHARS);
    $prenom=filter_var($_POST["nom"], HTML_SPECIALCHARS);
    $password=filter_var(filter_var($_POST["nom"],HTML_SPECIALCHARS), PASSWORD_BCRYPT);
    createUser($nom,$prenom,$password,$mail);
    session_start();
    //TODO
}




require("../views/inscription_page.php");