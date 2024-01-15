<?php

require("../models/PDO.php");
require("../models/game_model.php");
require("../lib/component/header.php");

if (isset($_POST["ajout"])) {
    
    $nom = $_POST["nom"];
    $editeur = $_POST["editeur"];
    $date = $_POST["date"];
    $ps = null;
    $xbox = null;
    $nintendo = null;
    $pc = null;
    $desc = "";
    $url_cover = "";
    $url_site = $_POST["url_site"];

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
        $desc = $_POST["desc"];
    }

    if(isset($_POST["url_cover"])){
        $url_cover = $_POST["url_cover"];
    }

    createGame($nom, $editeur, $date, $ps, $xbox, $nintendo, $pc, $desc, $url_cover, $url_site);
}

require("../views/add_game_form_page.php");
