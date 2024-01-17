<?php
require_once ('lib/component/header.php');
require_once ('models/user_model.php');
require_once ('models/game_model.php');
require "models/PDO.php";
$games = getGamesRank();

require_once ('views/classement_page.php');
require_once ('lib/component/footer.php');
