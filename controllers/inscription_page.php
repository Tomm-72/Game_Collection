<?php
require("models/PDO.php");
require("models/user_model.php");
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["passwordConfirmed"])){
    $email=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $nom=filter_var($_POST["nom"], FILTER_SANITIZE_STRING);
    $prenom=filter_var($_POST["prenom"], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    createUser($nom,$prenom,$password,$email);
    header("Location: connexion");
}

require("views/inscription_page.php");