<?php

require_once ('models/user_model.php');
require_once ('models/library_model.php');
$userId = $_SESSION["id_utilisateur"];
$userName = getUserInfoById($userId)["prenom_utilisateur"];
require_once ('lib/component/header.php');
require_once ('views/edit_user_profile.php');
//require_once ('lib/component/footer.php');