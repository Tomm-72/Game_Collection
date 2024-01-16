<?php
    require_once 'vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    session_start();
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {
            case 'accueil':
                require_once ('controllers/home_page.php');
                break;
            case 'connexion':
                require_once ('controllers/connexion_page.php');
                break;
            case 'inscription':
                require_once ('controllers/inscription_page.php');
                break;
            case 'ajout':
                require_once ('controllers/library_page.php');
                break;
            default:
                header('Location: connexion');
        }
    }
?>