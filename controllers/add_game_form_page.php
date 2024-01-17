<?php

require("models/PDO.php");
require("models/game_model.php");
require("models/library_model.php");
require("models/user_model.php");
require("lib/component/header.php");

if (isset($_POST["ajout"])) {
    var_dump($_POST);
    $nom = htmlspecialchars($_POST["nom"]);

    if(!empty(getGamesWithFilterAdd($nom))){
        header('Location: accueil');
        exit();
    }

    $editeur = htmlspecialchars($_POST["editeur"]);
    $date = $_POST["date"];
    $ps = null;
    $xbox = null;
    $nintendo = null;
    $pc = null;
    $desc = "";
    $url_cover = htmlspecialchars($_POST["url_cover"]);
    $url_site = htmlspecialchars($_POST["url_site"]);

    if(isset($_POST["ps"])){
        $ps = $_POST["ps"];
    }
    
    if(isset($_POST["xbox"])){
        $xbox = $_POST["xbox"];
    }

    if(isset($_POST["nintendo"])){
        $nintendo = $_POST["nintendo"];
    }

    if(isset($_POST["pc"])){
        $pc = $_POST["pc"];
    }

    if(isset($_POST["desc"])){
        $desc = htmlspecialchars($_POST["desc"]);
    }

    $id_user = $_SESSION['id_utilisateur'];

    createGame($nom, $editeur, $date, $desc, $url_cover, $url_site, $ps, $xbox, $nintendo, $pc, $id_user);
    header("Location: accueil");
}

require("views/add_game_form_page.php");
