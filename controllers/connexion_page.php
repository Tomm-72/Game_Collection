<?php

require "../models/PDO.php";
require "../models/user_model.php";

if(isset($_POST['email']) && isset($_POST['password'])){
    $mdp = getMDPUser($_POST['email']);
    if($mdp == $_POST['password']){
        
    }
}
