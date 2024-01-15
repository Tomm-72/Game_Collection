<?php

require_once ('models/user_model.php');
require_once ('models/game_model.php');
require_once ('models/library_model.php');
$userId = $_SESSION["id_utilisateur"];
$userName = getUserInfoById($userId)["prenom_utilisateur"];
$games = getLibraryOfUser($userId);

require_once ('lib/component/header.php');
require_once ('views/home_page.php');

