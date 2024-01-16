<?php
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$db = new PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASS'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

session_start();
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'accueil':
            require_once('controllers/home_page.php');
            break;
        case 'connexion':
            require_once('controllers/connexion_page.php');
            break;
        case 'inscription':
            require_once('controllers/inscription_page.php');
            break;
        case 'profile':
            require_once('controllers/edit_user_profile.php');
            break;
        default:
            header('Location: connexion');
            break;
    }
} else {
    header('Location: connexion');
    exit;
}
?>