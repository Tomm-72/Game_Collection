<?php

require("models/PDO.php");
require("models/user_model.php");
require('models/library_model.php');
require('lib/component/header.php');

$game = getLibraryGameOfUserByIdGame($_SESSION['id_utilisateur'], $_GET['game']);

if(isset($_POST['ajouter'])){
    $nb_heure = $_POST['heure'];
    $id_user = $_SESSION['id_utilisateur'];
    $id_game = $game['id_jeu'];
    updateGameInLibrary($id_user, $id_game, $nb_heure);
}

if(isset($_POST['supprimer'])){
    $id_user = $_SESSION['id_utilisateur'];
    $id_game = $game['id_jeu'];
    deleteGameInLibrary($id_user,$id_game);
}


require("views/update_game_page.php");