<?php 

function getDB()
{
    //Connexion à la bdd
    $bdd = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] , $_ENV['DB_USER'] , $_ENV['DB_PASS'] , array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    return $bdd;
}