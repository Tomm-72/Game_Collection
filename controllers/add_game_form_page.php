<?php

require("models/PDO.php");
require("models/game_model.php");
require("lib/component/header.php");

if (isset($_POST["nom"]) && isset($_POST["editeur"]) && isset($_POST["date"])  && isset($_POST["ps"]) && isset($_POST["xbox"]) && isset($_POST["nintendo"])&& isset($_POST["desc"]) && isset($_POST["url_cover"]) && isset($_POST["url_site"])){
    $nom = $_POST["nom"];
    $editeur = $_POST["editeur"];
    $date = $_POST["date"];
    $ps = $_POST["ps"];
    $xbox = $_POST["xbox"];
    $nintendo = $_POST["nintendo"];
    $desc = $_POST["desc"];
    $url_cover = $_POST["url_cover"];
    $url_site = $_POST["url_site"];

    createGame($nom, $editeur, $date, $ps, $xbox, $nintendo, $desc, $url_cover, $url_site);
}

require("views/inscription_page.php");
